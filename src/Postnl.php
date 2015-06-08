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
     * @var array $clients
     *     An array with instaintiated CIF clients.
     */
    protected $clients = [];

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
        $this->clients['BarcodeClient'] = $barcodeClient;
    }

    /**
     * @param ConfirmingClient $confirmingClient
     */
    public function setConfirmingClient(ConfirmingClient $confirmingClient)
    {
        $this->clients['ConfirmingClient'] = $confirmingClient;
    }

    /**
     * @param LabellingClient $labellingClient
     */
    public function setLabellingClient(LabellingClient $labellingClient)
    {
        $this->clients['LabellingClient'] = $labellingClient;
    }

    /**
     * @param ShippingStatusClient $shippingStatusClient
     */
    public function setShippingStatusClient(ShippingStatusClient $shippingStatusClient)
    {
        $this->clients['ShippingStatusClient'] = $shippingStatusClient;
    }

    /**
     * @param string $type
     * @param string $customerCode
     *     Defaults to the customer code used to instantiate this object.
     * @param string $customerNumber
     *     Defaults to the customer number used to instantiate this object.
     * @param string $serie
     *     Defaults to the widest possible range.
     * @return ComplexTypes\GenerateBarcodeResponse
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
        $message = new ComplexTypes\Message;
        $customer = new ComplexTypes\GenerateBarcodeCustomer($customerCode, $customerNumber);
        $barcode = new ComplexTypes\Barcode($type, $customerCode, $serie);
        $generateBarcodeMessage = new ComplexTypes\GenerateBarcodeMessage($message, $customer, $barcode);

        // Query the webservice and return the result.
        return $this->getClient('BarcodeClient')->generateBarcode($generateBarcodeMessage);
    }

    /**
     * @param ComplexTypes\ConfirmingMessage $confirmingMessage
     * @return ComplexTypes\ArrayOfConfirmingResponseShipment
     *
     * @see ConfirmingClient::confirming()
     */
    public function confirming(ComplexTypes\ArrayOfShipment $shipments)
    {
        // Prepare arguments.
        $customer = new ComplexTypes\Customer($this->customerNumber, $this->customerCode, $this->collectionLocation);
        $message = new ComplexTypes\Message;
        $confirmingMessage = new ComplexTypes\ConfirmingMessage($customer, $message, $shipments);

        // Query the webservice and return the result.
        return $this->getClient('ConfirmingClient')->confirming($confirmingMessage);
    }

    /**
     * @param ComplexTypes\Shipment $shipment
     * @param bool $confirm
     *     Defaults to true.
     * @return ComplexTypes\ResponseShipment
     *
     * @see LabellingClient::generateLabel()
     */
    public function generateLabel(ComplexTypes\Shipment $shipment, $confirm = true)
    {
        // Prepare arguments.
        $message = new ComplexTypes\LabellingMessage;
        $customer = new ComplexTypes\Customer($this->customerNumber, $this->customerCode, $this->collectionLocation);
        $request = new ComplexTypes\GenerateLabelRequest($message, $customer, $shipment);

        // Query the webservice and return the result.
        $client = $this->getClient('LabellingClient');
        return $confirm ? $client->generateLabel($request) : $client->generateLabelWithoutConfirm($request);
    }

    /**
     * @param ComplexTypes\Shipment $shipment
     * @return ComplexTypes\ResponseShipment
     *
     * @see LabellingClient::generateLabelWithoutConfirm()
     */
    public function generateLabelWithoutConfirm(ComplexTypes\Shipment $shipment)
    {
        return $this->generateLabel($shipment, false);
    }

    /**
     * @param string $barcode
     * @return CurrentStatusResponse
     *
     * @see ShippingStatusClient::currentStatus()
     */
    public function currentStatus($barcode)
    {
        // Prepare arguments.
        $message = new ComplexTypes\Message;
        $customer = new ComplexTypes\RequestCustomer($this->customerCode, $this->customerNumber);
        $shipment = new ComplexTypes\RequestShipment($barcode);
        $request = new ComplexTypes\CurrentStatusRequest($message, $customer, $shipment);

        // Query the webservice and return the result.
        return $this->getClient('ShippingStatusClient')->currentStatus($request);
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

        $requestXml = DOMDocument::loadXML($this->getClient($this->lastClient)->__getLastRequest());
        $requestXml->formatOutput = true;
        $responseXml = DOMDocument::loadXML($this->getClient($this->lastClient)->__getLastResponse());
        $responseXml->formatOutput = true;

        return ['request' => $requestXml->saveXML(), 'response' => $responseXml->saveXML()];
    }

    /**
     * Get CIF client by name. Takes care of instantiating clients if needed.
     *
     * @param $clientName
     * @return mixed
     */
    protected function getClient($clientName)
    {
        // Instantiate the client if not set yet.
        if (!isset($this->clients[$clientName])) {
            $className = __NAMESPACE__ . "\\$clientName";
            $this->clients[$clientName] = new $className($this->securityHeader, $this->sandbox);
        }

        // Keep track of last used client for debugging purposes.
        $this->lastClient = $clientName;

        return $this->clients[$clientName];
    }
}
