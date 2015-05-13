<?php namespace DivideBV\Postnl;

use DateTime;
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
        $message = new ComplexTypes\Message(1, (new DateTime)->format("d-m-Y H:i:s"));
        $customer = new ComplexTypes\GenerateBarcodeCustomer($customerCode, $customerNumber);
        $barcode = new ComplexTypes\Barcode($type, $customerCode, $serie);
        $generateBarcodeMessage = new ComplexTypes\GenerateBarcodeMessage($message, $customer, $barcode);

        // Instantiate barcode client if not yet set.
        $this->barcodeClient = $this->barcodeClient ?: new BarcodeClient($this->securityHeader, $this->sandbox);

        // Query the webservice and return the result.
        return $this->barcodeClient->generateBarcode($generateBarcodeMessage);
    }

    /**
     * Get the raw XML of the last SOAP request and reponse.
     *
     * @param string $client
     *     The name of the client (ex. `barcodeClient`).
     */
    public function debug($client)
    {
        $requestXml = DOMDocument::loadXML($this->{$client}->__getLastRequest());
        $requestXml->formatOutput = true;
        $responseXml = DOMDocument::loadXML($this->{$client}->__getLastResponse());
        $responseXml->formatOutput = true;

        return ['request' => $requestXml->saveXML(), 'response' => $responseXml->saveXML()];
    }
}
