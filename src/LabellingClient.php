<?php namespace DivideBV\Postnl;

/**
 * Client class for CIF's labelling service.
 */
class LabellingClient extends BaseClient
{

    /**
     * The URL of the production WSDL.
     */
    const PRODUCTION_WSDL = 'https://service.postnl.com/CIF/LabellingWebService/1_8/?wsdl';

    /**
     * The URL of the sandbox WSDL.
     */
    const SANDBOX_WSDL = 'https://testservice.postnl.com/CIF_SB/LabellingWebService/1_8/?wsdl';

    /**
     * @var array $classes
     *     The complex types used by this client.
     */
    protected $classes = [
        'GenerateLabelRequest',
        'Customer',
        'Address',
        'Message',
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
        'ResponseShipment',
        'ArrayOfLabel',
        'Label',
        'ArrayOfWarning',
        'Warning',
    ];

    /**
     * @param ComplexTypes\GenerateLabelRequest $GenerateLabel
     * @return ComplexTypes\ResponseShipment
     */
    public function generateLabel(ComplexTypes\GenerateLabelRequest $GenerateLabel)
    {
        return $this->__soapCall('GenerateLabel', [$GenerateLabel]);
    }

    /**
     * @param ComplexTypes\GenerateLabelRequest $GenerateLabel
     * @return ComplexTypes\ResponseShipment
     */
    public function generateLabelWithoutConfirm(ComplexTypes\GenerateLabelRequest $GenerateLabel)
    {
        return $this->__soapCall('GenerateLabelWithoutConfirm', [$GenerateLabel]);
    }
}
