<?php namespace DivideBV\Postnl;

/**
 * Client class for CIF's location service.
 */
class EasyReturnServiceClient extends BaseClient
{

    /**
     * The URL of the production WSDL.
     */
    const PRODUCTION_WSDL = 'https://service.postnl.com/CIF/EasyReturnWebService/1_5/?wsdl';

    /**
     * The URL of the sandbox WSDL.
     */
    const SANDBOX_WSDL = 'https://testservice.postnl.com/CIF_SB/EasyReturnWebService/1_5/?wsdl';

    /**
     * @var array $classes
     *     The complex types used by this client.
     */
    protected $classes = [
        'GenerateLabelRequest',
        'GenerateReturnLabelRequest',
        'Customer',
        'Address',
        'Message',
        'ArrayOfShipment',
        'Shipment',
        'ArrayOfAddress',
        'ArrayOfAmount',
        'Amount',
        'ArrayOfContact',
        'Contact',
        'Customs',
        'ArrayOfContent',
        'Content',
        'Dimension',
        'ArrayOfGroup',
        'Group',
        'ArrayOfProductOption',
        'ProductOption',
        'GenerateLabelResponse',
        'GenerateReturnLabelResponse',
        'ArrayOfMergedLabel',
        'MergedLabel',
        'ResponseShipment',
        'ArrayOfLabel',
        'Label',
        'ArrayOfResponseShipment',
        'ArrayOfWarning',
        'Warning',
    ];

    /**
     * @param ComplexTypes\GenerateReturnLabelRequest $generateReturnLabel
     * @return ComplexTypes\GenerateReturnLabelResponse
     */
    public function generateReturnLabel(ComplexTypes\GenerateReturnLabelRequest $generateReturnLabel)
    {
        return $this->__soapCall('GenerateReturnLabel', [$generateReturnLabel]);
    }
}
