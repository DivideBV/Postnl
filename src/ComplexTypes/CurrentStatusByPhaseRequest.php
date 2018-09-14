<?php namespace DivideBV\Postnl\ComplexTypes;

class CurrentStatusByPhaseRequest extends BaseType
{

    /**
     * @var Message
     */
    protected $Message = null;

    /**
     * @var RequestCustomer
     */
    protected $Customer = null;

    /**
     * @var RequestShipmentPhase
     */
    protected $Shipment = null;

    /**
     * @param Message $Message
     * @param RequestCustomer $Customer
     * @param RequestShipmentPhase $Shipment
     */
    public function __construct(
        Message $Message,
        RequestCustomer $Customer,
        RequestShipmentPhase $Shipment
    ) {
        $this->setMessage($Message);
        $this->setCustomer($Customer);
        $this->setShipment($Shipment);
    }

    /**
     * @return Message
     */
    public function getMessage()
    {
        return $this->Message;
    }

    /**
     * @param Message $Message
     * @return CurrentStatusByPhaseRequest
     */
    public function setMessage($Message)
    {
        $this->Message = $Message;
        return $this;
    }

    /**
     * @return RequestCustomer
     */
    public function getCustomer()
    {
        return $this->Customer;
    }

    /**
     * @param RequestCustomer $Customer
     * @return CurrentStatusByPhaseRequest
     */
    public function setCustomer($Customer)
    {
        $this->Customer = $Customer;
        return $this;
    }

    /**
     * @return RequestShipmentPhase
     */
    public function getShipment()
    {
        return $this->Shipment;
    }

    /**
     * @param RequestShipmentPhase $Shipment
     * @return CurrentStatusByPhaseRequest
     */
    public function setShipment($Shipment)
    {
        $this->Shipment = $Shipment;
        return $this;
    }
}
