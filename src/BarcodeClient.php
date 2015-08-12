<?php namespace DivideBV\Postnl;

/**
 * Client class for CIF's barcode service.
 *
 * I'm sorry, but what moron concocted this service? Basically all it does is
 * generate a random number and concatenate `type`, `range` and the generated
 * number. And what use is it to ask for the same parameter twice?
 */
class BarcodeClient extends BaseClient
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
     * @var array $classes
     *     The complex types used by this client.
     */
    protected $classes = [
        'GenerateBarcodeMessage',
        'Message',
        'GenerateBarcodeCustomer',
        'Barcode',
        'GenerateBarcodeResponse',
    ];

    /**
     * @param ComplexTypes\GenerateBarcodeMessage $GenerateBarcodeMessage
     * @return ComplexTypes\GenerateBarcodeResponse
     */
    public function generateBarcode(ComplexTypes\GenerateBarcodeMessage $GenerateBarcodeMessage)
    {
        return $this->__soapCall('GenerateBarcode', [$GenerateBarcodeMessage]);
    }
}
