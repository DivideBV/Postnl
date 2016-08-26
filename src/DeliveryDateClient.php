<?php namespace DivideBV\Postnl;

/**
 * Client class for CIF's delivery date service.
 */
class DeliveryDateClient extends BaseClient
{

    /**
     * The URL of the production WSDL.
     */
    const PRODUCTION_WSDL = 'https://service.postnl.com/CIF/DeliveryDateWebService/2_1/?wsdl';

    /**
     * The URL of the sandbox WSDL.
     */
    const SANDBOX_WSDL = 'https://testservice.postnl.com/CIF_SB/DeliveryDateWebService/2_1/?wsdl';

    /**
     * @var array $classes
     *     The complex types used by this client.
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
