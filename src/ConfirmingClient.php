<?php namespace DivideBV\Postnl;

/**
 * Client class for CIF's confirming service.
 */
class ConfirmingClient extends BaseClient
{

    /**
     * @var string The URL of the production WSDL.
     */
    const PRODUCTION_WSDL = 'https://api.postnl.nl/shipment/v1_9/confirm/soap.wsdl';

    /**
     * @var string The URL of the sandbox WSDL.
     */
    const SANDBOX_WSDL = 'https://api-sandbox.postnl.nl/shipment/v1_9/confirm/soap.wsdl';

    /**
     * @var array The complex types used by this client.
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
