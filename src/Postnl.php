<?php namespace DivideBV\Postnl;

use DOMDocument;

/**
 * This class is a high-level wrapper around the various CIF services.
 */
class Postnl
{

    /**
     * @var string $customerNumber
     */
    protected $customerNumber = null;

    /**
     * @var string $customerCode
     */
    protected $customerCode = null;

    /**
     * @var string $customerName
     */
    protected $customerName = null;

    /**
     * @var ComplexTypes\SecurityHeader $securityHeader
     */
    protected $securityHeader = null;

    /**
     * @var string $collectionLocation
     */
    protected $collectionLocation = null;

    /**
     * @var string $globalPackCustomerCode
     */
    protected $globalPackCustomerCode = null;

    /**
     * @var bool $sandbox
     */
    protected $sandbox = false;

    /**
     * @var BarcodeClient $barcodeClient
     */
    protected $barcodeClient = null;

    /**
     * @var ConfirmingClient $confirmingClient
     */
    protected $confirmingClient = null;

    /**
     * @var LabellingClient $labellingClient
     */
    protected $labellingClient = null;

    /**
     * @var string $lastClient
     *     Contains the property name of the last used SOAP client.
     */
    private $lastClient = null;

    /**
     * @param string $customerNumber
     * @param string $customerCode
     * @param string $customerName
     * @param string $username
     * @param string $password
     * @param string $collectionLocation
     * @param string $globalPack
     * @param bool $sandbox
     */
    public function __construct(
        $customerNumber,
        $customerCode,
        $customerName,
        $username,
        $password,
        $collectionLocation,
        $globalPack,
        $sandbox = false
    ) {
        $this->customerNumber = $customerNumber;
        $this->customerCode = $customerCode;
        $this->customerName = $customerName;
        $this->securityHeader = new ComplexTypes\SecurityHeader($username, $password);
        $this->collectionLocation = $collectionLocation;
        $this->globalPackCustomerCode = preg_filter('/^.{2}(.{4})$/', '$1', $globalPack);
        $this->sandbox = $sandbox;
    }

    /**
     * @param BarcodeClient $barcodeClient
     */
    public function setBarcodeClient(BarcodeClient $barcodeClient)
    {
        $this->barcodeClient = $barcodeClient;
    }

    /**
     * @param ConfirmingClient $confirmingClient
     */
    public function setConfirmingClient(ConfirmingClient $confirmingClient)
    {
        $this->confirmingClient = $confirmingClient;
    }

    /**
     * @param string $type
     * @param string $customerCode
     *     Defaults to the customer code used to instantiate this object.
     * @param string $customerNumber
     *     Defaults to the customer number used to instantiate this object.
     * @param string $serie
     *     Defaults to the widest possible range.
     *
     * @see BarcodeClient::generateBarcode()
     */
    public function generateBarcode(
        $type,
        $customerCode = null,
        $customerNumber = null,
        $serie = null
    ) {
        // Validate $type parameter.
        if (!in_array($type, ['2S', '3S', 'CC', 'CP', 'CD', 'CF'])) {
            throw new Exceptions\InvalidBarcodeTypeException($type);
        }

        // Default customer code and number.
        if (!$customerCode) {
            // Use the separate Globalpack customer code for those shipments.
            $customerCode = in_array($type, ['2S', '3S']) ? $this->customerCode : $this->globalPackCustomerCode;
        }
        $customerNumber = $customerNumber ?: $this->customerNumber;

        // Default serie.
        if (!$serie) {
            switch ($type) {
                case '2S':
                    $serie = '0000000-9999999';
                    break;
                case '3S':
                    // 3S barcodes are the only ones that may be 15 characters
                    // long.
                    $serie = '000000000-999999999';
                    break;
                default:
                    // Globalpack is 4 digits, because the barcode is suffixed
                    // with the ISO country code.
                    $serie = '0000-9999';
            }
        }

        // Prepare arguments.
        $message = new ComplexTypes\Message();
        $customer = new ComplexTypes\GenerateBarcodeCustomer($customerCode, $customerNumber);
        $barcode = new ComplexTypes\Barcode($type, $customerCode, $serie);
        $generateBarcodeMessage = new ComplexTypes\GenerateBarcodeMessage($message, $customer, $barcode);

        // Instantiate barcode client if not yet set.
        $this->lastClient = $client = 'barcodeClient';
        $this->{$client} = $this->{$client} ?: new BarcodeClient($this->securityHeader, $this->sandbox);

        // Query the webservice and return the result.
        return $this->{$client}->generateBarcode($generateBarcodeMessage);
    }

    /**
     * @param ComplexTypes\ConfirmingMessage $confirmingMessage
     */
    public function confirming(ComplexTypes\ArrayOfShipment $shipments)
    {
        // Prepare arguments.
        $customer = new ComplexTypes\Customer($this->customerNumber, $this->customerCode, $this->collectionLocation);
        $message = new ComplexTypes\Message;
        $confirmingMessage = new ComplexTypes\ConfirmingMessage($customer, $message, $shipments);

        // Instantiate confirming client if not yet set.
        $this->lastClient = $client = 'confirmingClient';
        $this->{$client} = $this->{$client} ?: new ConfirmingClient($this->securityHeader, $this->sandbox);

        // Query the webservice and return the result.
        return $this->{$client}->confirming($confirmingMessage);
    }

    /**
     * @param ComplexTypes\Shipment $shipment
     * @param bool $confirm
     *     Defaults to true.
     */
    public function generateLabel(ComplexTypes\Shipment $shipment, $confirm = true)
    {
        // Prepare arguments.
        $message = new ComplexTypes\LabellingMessage;
        $customer = new ComplexTypes\Customer($this->customerNumber, $this->customerCode, $this->collectionLocation);
        $generateLabelRequest = new ComplexTypes\GenerateLabelRequest($message, $customer, $shipment);

        // Instantiate labelling client if not yet set.
        $this->lastClient = $client = 'labellingClient';
        $this->{$client} = $this->{$client} ?: new LabellingClient($this->securityHeader, $this->sandbox);

        // Query the webservice and return the result.
        if ($confirm) {
            return $this->{$client}->generateLabel($generateLabelRequest);
        } else {
            return $this->{$client}->generateLabelWithoutConfirm($generateLabelRequest);
        }
    }

    /**
     * @param ComplexTypes\Shipment $shipment
     */
    public function generateLabelWithoutConfirm(ComplexTypes\Shipment $shipment)
    {
        return $this->generateLabel($shipment, false);
    }

    /**
     * Get the raw XML of the last SOAP request and reponse.
     */
    public function debug()
    {
        // Prevent accessing empty property.
        if (!$this->lastClient) {
            return;
        }

        $requestXml = DOMDocument::loadXML($this->{$this->lastClient}->__getLastRequest());
        $requestXml->formatOutput = true;
        $responseXml = DOMDocument::loadXML($this->{$this->lastClient}->__getLastResponse());
        $responseXml->formatOutput = true;

        return ['request' => $requestXml->saveXML(), 'response' => $responseXml->saveXML()];
    }
}
