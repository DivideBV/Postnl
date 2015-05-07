<?php namespace DivideBV\Postnl;

/**
 * This class is a high-level wrapper around the various CIF services.
 */
class Postnl
{

    /**
     * @var ComplexTypes\SecurityHeader $securityHeader
     */
    protected $securityHeader = null;

    /**
     * @var bool $sandbox
     */
    protected $sandbox = false;

    /**
     * @var BarcodeClient $barcodeClient
     */
    protected $barcodeClient = null;

    /**
    * @param string $username
    * @param string $password
    * @param bool $sandbox
     */
    public function __construct($username, $password, $sandbox = false)
    {
        $this->securityHeader = new ComplexTypes\SecurityHeader($username, $password);
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
     * @param string $messageId
     * @param string $messageTimestamp
     * @param string $customerCode
     * @param string $customerNumber
     * @param string $type
     * @param string $range
     * @param string $serie
     *
     * @see BarcodeClient::generateBarcode()
     */
    public function generateBarcode(
        $messageId,
        $messageTimestamp,
        $customerCode,
        $customerNumber,
        $type,
        $range,
        $serie
    ) {
        // Instantiate barcode client if not yet set.
        $this->barcodeClient = $this->barcodeClient ?: new BarcodeClient($this->securityHeader, $this->sandbox);

        // Prepare arguments.
        $message = new ComplexTypes\Message($messageId, $messageTimestamp);
        $customer = new ComplexTypes\GenerateBarcodeCustomer($customerCode, $customerNumber);
        $barcode = new ComplexTypes\Barcode($type, $range, $serie);
        $generateBarcodeMessage = new ComplexTypes\GenerateBarcodeMessage($message, $customer, $barcode);

        return $this->barcodeClient->generateBarcode($generateBarcodeMessage);
    }
}
