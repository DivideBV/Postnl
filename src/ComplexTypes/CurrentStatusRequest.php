<?php namespace DivideBV\Postnl\ComplexTypes;

class CurrentStatusRequest extends BaseType
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
     * @var RequestShipment
     */
    protected $Shipment = null;

    /**
     * @param Message $Message
     * @param RequestCustomer $Customer
     * @param RequestShipment $Shipment
     */
    public function __construct(
        Message $Message,
        RequestCustomer $Customer,
        RequestShipment $Shipment
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
     * @return CurrentStatusRequest
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
     * @return CurrentStatusRequest
     */
    public function setCustomer($Customer)
    {
        $this->Customer = $Customer;
        return $this;
    }

    /**
     * @return RequestShipment
     */
    public function getShipment()
    {
        return $this->Shipment;
    }

    /**
     * @param RequestShipment $Shipment
     * @return CurrentStatusRequest
     */
    public function setShipment($Shipment)
    {
        $this->Shipment = $Shipment;
        return $this;
    }
}
