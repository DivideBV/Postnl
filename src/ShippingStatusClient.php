<?php namespace DivideBV\Postnl;

/**
 * Client class for CIF's shipping status service.
 */
class ShippingStatusClient extends BaseClient
{

    /**
     * The URL of the production WSDL.
     */
    const PRODUCTION_WSDL = 'https://service.postnl.com/CIF/ShippingStatusWebService/1_6/?wsdl';

    /**
     * The URL of the sandbox WSDL.
     */
    const SANDBOX_WSDL = 'https://testservice.postnl.com/CIF_SB/ShippingStatusWebService/1_6/?wsdl';

    /**
     * @var array $classes
     *     The complex types used by this client.
     */
    protected $classes = [
        'CurrentStatusRequest',
        'Message',
        'RequestCustomer',
        'RequestShipment',
        'CurrentStatusResponse',
        'ArrayOfCurrentStatusResponseShipment',
        'CurrentStatusResponseShipment',
        'ArrayOfResponseAddress',
        'ResponseAddress',
        'ArrayOfResponseAmount',
        'ResponseAmount',
        'ResponseDimension',
        'ResponseExpectation',
        'ArrayOfResponseGroup',
        'ResponseGroup',
        'ArrayOfResponseProductOption',
        'ResponseProductOption',
        'ResponseStatus',
        'ArrayOfWarning',
        'Warning',
        'CompleteStatusRequest',
        'CompleteStatusResponse',
        'ArrayOfCompleteStatusResponseShipment',
        'CompleteStatusResponseShipment',
        'ResponseCustomer',
        'ArrayOfCompleteStatusResponseEvent',
        'CompleteStatusResponseEvent',
        'ArrayOfCompleteStatusResponseOldStatus',
        'CompleteStatusResponseOldStatus',
        'CurrentStatusByReferenceRequest',
        'CompleteStatusByReferenceRequest',
        'CurrentStatusByStatusRequest',
        'RequestShipmentStatus',
        'CurrentStatusByPhaseRequest',
        'RequestShipmentPhase',
        'GetSignatureRequest',
        'RequestSignature',
        'GetSignatureResponse',
        'ArrayOfGetSignatureResponseSignature',
        'GetSignatureResponseSignature',
        'CifException',
        'ArrayOfExceptionData',
        'ExceptionData',
    ];

    /**
     * @param CurrentStatusRequest $CurrentStatus
     * @return CurrentStatusResponse
     */
    public function currentStatus(CurrentStatusRequest $CurrentStatus)
    {
        return $this->__soapCall('CurrentStatus', [$CurrentStatus]);
    }

    /**
     * @param CompleteStatusRequest $CompleteStatus
     * @return CompleteStatusResponse
     */
    public function completeStatus(CompleteStatusRequest $CompleteStatus)
    {
        return $this->__soapCall('CompleteStatus', [$CompleteStatus]);
    }

    /**
     * @param CurrentStatusByReferenceRequest $CurrentStatusByReference
     * @return CurrentStatusResponse
     */
    public function currentStatusByReference(CurrentStatusByReferenceRequest $CurrentStatusByReference)
    {
        return $this->__soapCall('CurrentStatusByReference', [$CurrentStatusByReference]);
    }

    /**
     * @param CompleteStatusByReferenceRequest $CompleteStatusByReference
     * @return CompleteStatusResponse
     */
    public function completeStatusByReference(CompleteStatusByReferenceRequest $CompleteStatusByReference)
    {
        return $this->__soapCall('CompleteStatusByReference', [$CompleteStatusByReference]);
    }

    /**
     * @param CurrentStatusByStatusRequest $CurrentStatusByStatus
     * @return CurrentStatusResponse
     */
    public function currentStatusByStatus(CurrentStatusByStatusRequest $CurrentStatusByStatus)
    {
        return $this->__soapCall('CurrentStatusByStatus', [$CurrentStatusByStatus]);
    }

    /**
     * @param CurrentStatusByPhaseRequest $CurrentStatusByPhase
     * @return CurrentStatusResponse
     */
    public function currentStatusByPhase(CurrentStatusByPhaseRequest $CurrentStatusByPhase)
    {
        return $this->__soapCall('CurrentStatusByPhase', [$CurrentStatusByPhase]);
    }

    /**
     * @param GetSignatureRequest $GetSignature
     * @return GetSignatureResponse
     */
    public function getSignature(GetSignatureRequest $GetSignature)
    {
        return $this->__soapCall('GetSignature', [$GetSignature]);
    }
}
