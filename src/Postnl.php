<?php namespace DivideBV\Postnl;

use DOMDocument;
use SoapFault;

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
     * @var string $globalPackBarcodeType
     */
    protected $globalPackBarcodeType = null;

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
     *     An array with instantiated CIF clients.
     */
    protected $clients = [];

    /**
     * @var string $lastClient
     *     Contains the property name of the last used SOAP client.
     */
    private $lastClient = null;

    /**
     * @var string countryCodeMapping
     *     Maps the country code to the required barcode type.
     */
    protected $countryCodeMapping = [
        // Dutch domestic product.
        'NL' => '3S',
        // EPS products.
        'AT' => '3S',
        'BE' => '3S',
        'BG' => '3S',
        'CZ' => '3S',
        'CY' => '3S',
        'DK' => '3S',
        'EE' => '3S',
        'FI' => '3S',
        'FR' => '3S',
        'DE' => '3S',
        'GB' => '3S',
        'GR' => '3S',
        'HU' => '3S',
        'IE' => '3S',
        'IT' => '3S',
        'LV' => '3S',
        'LT' => '3S',
        'LU' => '3S',
        'PL' => '3S',
        'PT' => '3S',
        'RO' => '3S',
        'SK' => '3S',
        'SI' => '3S',
        'ES' => '3S',
        'SE' => '3S',
        // Everything else is GlobalPack.
    ];

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
        $this->globalPackBarcodeType = preg_filter('/^(.{2})(.{4})$/', '$1', $globalPack);
        $this->globalPackCustomerCode = preg_filter('/^(.{2})(.{4})$/', '$2', $globalPack);
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
     * @param bool $eps
     *     Defaults to false (NL shipment).
     * @return ComplexTypes\GenerateBarcodeResponse
     *
     * @see BarcodeClient::generateBarcode()
     */
    public function generateBarcode(
        $type,
        $customerCode = null,
        $customerNumber = null,
        $serie = null,
        $eps = false
    ) {
        // Validate $type parameter.
        if (!in_array($type, ['2S', '3S', 'CC', 'CP', 'CD', 'CF', 'CV'])) {
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
                    if ($eps) {
                        // 3S barcodes for EPS parcels need to be 13 characters
                        // long.
                        $serie = '0000000-9999999';
                    }
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
        return $this->call('BarcodeClient', __FUNCTION__, $generateBarcodeMessage);
    }

    /**
     * Generate the right type of barcode for the given country code.
     *
     * @param string $countryCode
     *     The ISO country code of the receiver.
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
    public function generateBarcodeByDestination(
        $countryCode,
        $customerCode = null,
        $customerNumber = null,
        $serie = null
    ) {
        $eps = false;

        // If this country code has an explicit barcode type mapping, use it.
        if (in_array($countryCode, array_keys($this->countryCodeMapping))) {
            $type = $this->countryCodeMapping[$countryCode];
            $eps = $countryCode != 'NL';
        } else {
            // Otherwise use GlobalPack.
            $type = $this->globalPackBarcodeType;
        }
        return $this->generateBarcode($type, $customerCode, $customerNumber, $serie, $eps);
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
        return $this->call('ConfirmingClient', __FUNCTION__, $confirmingMessage);
    }

    /**
     * @param ComplexTypes\Shipment $shipment
     * @param string $printerType
     *     The file type used to generate the label. Defaults to PDF.
     * @param bool $confirm
     *     Defaults to true.
     * @return ComplexTypes\ResponseShipment
     *
     * @see LabellingClient::generateLabel()
     */
    public function generateLabel(ComplexTypes\Shipment $shipment, $printerType = 'GraphicFile|PDF', $confirm = true)
    {
        // Prepare arguments.
        $message = new ComplexTypes\LabellingMessage($printerType);
        $customer = new ComplexTypes\Customer($this->customerNumber, $this->customerCode, $this->collectionLocation);
        $request = new ComplexTypes\GenerateLabelRequest($message, $customer, $shipment);

        // Query the webservice and return the result.
        return $this->call('LabellingClient', $confirm ? __FUNCTION__ : 'generateLabelWithoutConfirm', $request);
    }

    /**
     * @param ComplexTypes\Shipment $shipment
     * @param string $printerType
     *     The file type used to generate the label. Defaults to PDF.
     * @return ComplexTypes\ResponseShipment
     *
     * @see LabellingClient::generateLabelWithoutConfirm()
     */
    public function generateLabelWithoutConfirm(ComplexTypes\Shipment $shipment, $printerType = 'GraphicFile|PDF')
    {
        return $this->generateLabel($shipment, $printerType, false);
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
        return $this->call('ShippingStatusClient', __FUNCTION__, $request);
    }

    /**
     * @param string $postalCode
     * @param string $countryCode
     * @param string $allowSundaySorting
     * @param null $deliveryDate
     * @return ComplexTypes\GetNearestLocationsResponse
     * @throws ComplexTypes\CifException
     * @throws SoapFault
     * 
     * @see LocationClient::getNearestLocation()
     */
    public function getNearestLocation($postalCode, $countryCode = 'NL', $allowSundaySorting = "false", $deliveryDate = null)
    {
        $message = new ComplexTypes\Message;
        $location = new ComplexTypes\Location($postalCode, $allowSundaySorting, $deliveryDate);

        $request = new ComplexTypes\GetNearestLocationsRequest($message, $location, $countryCode);
        return $this->call('LocationClient', __FUNCTION__, $request);
    }

    /**
     * @param $postalCode
     * @return mixed
     * @throws ComplexTypes\CifException
     * @throws SoapFault
     */
    public function getTimeframes($postalCode, $houseNumber)
    {
        $message = new ComplexTypes\Message;
        $timeframeRequest = new ComplexTypes\Timeframe($postalCode, $houseNumber);

        $request = new ComplexTypes\GetTimeframesRequest($message, $timeframeRequest);
        return $this->call('TimeframeClient', __FUNCTION__, $request);
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

        $requestXml = new DOMDocument;
        $requestXml->loadXML($this->getClient($this->lastClient)->__getLastRequest());
        $requestXml->formatOutput = true;

        $responseXml = new DOMDocument;
        $responseXml->loadXML($this->getClient($this->lastClient)->__getLastResponse());
        $responseXml->formatOutput = true;

        return ['request' => $requestXml->saveXML(), 'response' => $responseXml->saveXML()];
    }

    /**
     * Get CIF client by name. Takes care of instantiating clients if needed.
     *
     * @param string $clientName
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

    /**
     * Call a webservice with exception handling.
     *
     * @param string $clientName
     * @param string $method
     * @param mixed $parameter
     *
     * @throws ComplexTypes\CifException
     */
    protected function call($clientName, $method, $parameter)
    {
        try {
            return $this->getClient($clientName)->{$method}($parameter);
        } catch (SoapFault $exception) {
            if ($exception->faultcode == 's:CIF Framework Message Interceptor') {
                // This SoapFault was generated by the CIF service.

                // Assemble exception data from the response.
                $exceptionData = [];
                $errors = $exception->detail->CifException->Errors->ExceptionData;
                // Make sure `$errors` is an array.
                $errors = is_array($errors) ? $errors : [$errors];
                foreach ($errors as $error) {
                    $exceptionData[] = ComplexTypes\ExceptionData::create()
                        ->setDescription($error->Description)
                        ->setErrorMsg($error->ErrorMsg)
                        ->setErrorNumber($error->ErrorNumber);
                }

                // Throw a CifException instead.
                throw new ComplexTypes\CifException(new ComplexTypes\ArrayOfExceptionData($exceptionData));
            } else {
                // This SoapFault has another source, pass it up the stack.
                throw $exception;
            }
        }
    }
}
