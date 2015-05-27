<?php namespace DivideBV\Postnl\ComplexTypes;

class GenerateLabelRequest extends BaseType
{

    /**
     * @var LabellingMessage $Message
     */
    protected $Message = null;

    /**
     * @var Customer $Customer
     */
    protected $Customer = null;

    /**
     * @var Shipment $Shipment
     */
    protected $Shipment = null;

    /**
     * @param LabellingMessage $Message
     * @param Customer $Customer
     * @param Shipment $Shipment
     */
    public function __construct(LabellingMessage $Message, Customer $Customer, Shipment $Shipment)
    {
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
     * @param LabellingMessage $Message
     * @return GenerateLabelRequest
     */
    public function setMessage(LabellingMessage $Message)
    {
        $this->Message = $Message;
        return $this;
    }

    /**
     * @return Customer
     */
    public function getCustomer()
    {
        return $this->Customer;
    }

    /**
     * @param Customer $Customer
     * @return GenerateLabelRequest
     */
    public function setCustomer(Customer $Customer)
    {
        $this->Customer = $Customer;
        return $this;
    }

    /**
     * @return Shipment
     */
    public function getShipment()
    {
        return $this->Shipment;
    }

    /**
     * @param Shipment $Shipment
     * @return GenerateLabelRequest
     */
    public function setShipment(Shipment $Shipment)
    {
        $this->Shipment = $Shipment;
        return $this;
    }
}
