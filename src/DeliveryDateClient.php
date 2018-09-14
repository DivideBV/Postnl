<?php namespace DivideBV\Postnl;

/**
 * Client class for CIF's delivery date service.
 */
class DeliveryDateClient extends BaseClient
{

    /**
     * @var string The URL of the production WSDL.
     */
    const PRODUCTION_WSDL = 'https://api.postnl.nl/shipment/v2_1/calculate/date/soap.wsdl';

    /**
     * @var string The URL of the sandbox WSDL.
     */
    const SANDBOX_WSDL = 'https://api-sandbox.postnl.nl/shipment/v2_1/calculate/date/soap.wsdl';

    /**
     * @var array The complex types used by this client.
     */
    protected $classes = [
        'ArrayOfCutOffTime',
        'ArrayOfExceptionData',
        'CifException',
        'CutOffTime',
        'ExceptionData',
        'GetDeliveryDate',
        'GetDeliveryDateRequest',
        'GetDeliveryDateResponse',
        'GetSentDate',
        'GetSentDateRequest',
        'GetSentDateResponse',
        'Message'
    ];

    /**
     * @param ComplexTypes\GetDeliveryDateRequest $GetDeliveryDate
     * @return ComplexTypes\GetDeliveryDateResponse
     */
    public function getDeliveryDate(ComplexTypes\GetDeliveryDateRequest $GetDeliveryDate)
    {
        return $this->__soapCall('GetDeliveryDate', array($GetDeliveryDate));
    }

    /**
     * @param ComplexTypes\GetSentDateRequest $GetSentDateRequest
     * @return ComplexTypes\GetSentDateResponse
     */
    public function getSentDate(ComplexTypes\GetSentDateRequest $GetSentDateRequest)
    {
        return $this->__soapCall('GetSentDate', array($GetSentDateRequest));
    }
}
