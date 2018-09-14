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
     * @var string The URL of the production WSDL.
     */
    const PRODUCTION_WSDL = 'https://api.postnl.nl/shipment/v1_1/barcode/soap.wsdl';

    /**
     * @var string The URL of the sandbox WSDL.
     */
    const SANDBOX_WSDL = 'https://api-sandbox.postnl.nl/shipment/v1_1/barcode/soap.wsdl';

    /**
     * @var array The complex types used by this client.
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
