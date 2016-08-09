<?php namespace DivideBV\Postnl;

/**
 * Client class for CIF's confirming service.
 */
class ConfirmingClient extends BaseClient
{

    /**
     * The URL of the production WSDL.
     */
    const PRODUCTION_WSDL = 'https://service.postnl.com/CIF/ConfirmingWebService/1_9/?wsdl';

    /**
     * The URL of the sandbox WSDL.
     */
    const SANDBOX_WSDL = 'https://testservice.postnl.com/CIF_SB/ConfirmingWebService/1_9/?wsdl';

    /**
     * @var array $classes
     *     The complex types used by this client.
     */
    protected $classes = [
        'ConfirmingMessage',
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
        'ArrayOfConfirmingResponseShipment',
        'ConfirmingResponseShipment',
        'ArrayOfWarning',
        'Warning',
    ];

    /**
     * @param ComplexTypes\ConfirmingMessage $Confirming
     * @return ComplexTypes\ArrayOfConfirmingResponseShipment
     */
    public function confirming(ComplexTypes\ConfirmingMessage $Confirming)
    {
        return $this->__soapCall('Confirming', [$Confirming]);
    }
}
