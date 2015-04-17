<?php namespace DivideBV\Postnl;

use SoapClient;
use SoapHeader;
use DOMDocument;

class Barcodeclient extends SoapClient
{

    /**
     *
     */
    const DEFAULT_WSDL = 'https://testservice.postnl.com/CIF_SB/BarcodeWebService/1_1/?wsdl';

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
     *
     */
    public function __construct(ComplexTypes\SecurityHeader $SecurityHeader, $wsdl = self::DEFAULT_WSDL)
    {
        parent::__construct($wsdl, ['classmap' => $this->classmap, 'trace' => true]);

        $this->__setSoapHeaders($SecurityHeader);
    }

    /**
     * @param ComplexTypes\GenerateBarcodeMessage $GenerateBarcode
     * @return ComplexTypes\GenerateBarcodeResponse
     */
    public function GenerateBarcode(ComplexTypes\GenerateBarcodeMessage $GenerateBarcode)
    {
        return $this->__soapCall('GenerateBarcode', [$GenerateBarcode]);
    }

    public function debug()
    {
        $requestXml = DOMDocument::loadXML($this->__getLastRequest());
        $requestXml->formatOutput = true;

        return $requestXml->saveXML();
    }

}
