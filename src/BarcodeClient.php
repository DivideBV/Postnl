<?php namespace DivideBV\Postnl;

use SoapClient;
use DOMDocument;

/**
 * Client class for CIF's barcode service.
 *
 * I'm sorry, but what moron concocted this service? Basically all it does is
 * generate a random number and concatenate `type`, `range` and the generated
 * number. And what use is it to ask for the same parameter twice?
 */
class Barcodeclient extends SoapClient
{

    /**
     * The URL of the production WSDL.
     */
    const PRODUCTION_WSDL = 'https://service.postnl.com/CIF/BarcodeWebService/1_1/?wsdl';

    /**
     * The URL of the sandbox WSDL.
     */
    const SANDBOX_WSDL = 'https://testservice.postnl.com/CIF_SB/BarcodeWebService/1_1/?wsdl';

    /**
     * @var array $classmap
     *     The classes representing the complex types.
     */
    protected $classmap = [
        'GenerateBarcodeMessage' => 'DivideBV\\Postnl\\ComplexTypes\\GenerateBarcodeMessage',
        'Message' => 'DivideBV\\Postnl\\ComplexTypes\\Message',
        'GenerateBarcodeCustomer' => 'DivideBV\\Postnl\\ComplexTypes\\GenerateBarcodeCustomer',
        'Barcode' => 'DivideBV\\Postnl\\ComplexTypes\\Barcode',
        'GenerateBarcodeResponse' => 'DivideBV\\Postnl\\ComplexTypes\\GenerateBarcodeResponse',
        'CifException' => 'DivideBV\\Postnl\\ComplexTypes\\CifException',
        'ArrayOfExceptionData' => 'DivideBV\\Postnl\\ComplexTypes\\ArrayOfExceptionData',
        'ExceptionData' => 'DivideBV\\Postnl\\ComplexTypes\\ExceptionData',
    ];

    /**
     * @param ComplexTypes\SecurityHeader $SecurityHeader
     *     The authorization information.
     * @param bool $sandbox
     *     Whether to use the production or sandbox environment. Defaults to
     *     production.
     * @param string $wsdl
     *     The URL of the WSDL file to use, if not production or sandbox.
     */
    public function __construct(ComplexTypes\SecurityHeader $SecurityHeader, $sandbox = false, $wsdl = null)
    {
        // If no WSDL is provided, use either the sandbox or production WSDL.
        if (!$wsdl) {
            $wsdl = $sandbox ? self::SANDBOX_WSDL : self::PRODUCTION_WSDL;
        }

        parent::__construct($wsdl, ['classmap' => $this->classmap, 'trace' => true]);

        $this->__setSoapHeaders($SecurityHeader);
    }

    /**
     * @param ComplexTypes\GenerateBarcodeMessage $GenerateBarcodeMessage
     * @return ComplexTypes\GenerateBarcodeResponse
     */
    public function generateBarcode(ComplexTypes\GenerateBarcodeMessage $GenerateBarcodeMessage)
    {
        return $this->__soapCall('GenerateBarcode', [$GenerateBarcodeMessage]);
    }
}
