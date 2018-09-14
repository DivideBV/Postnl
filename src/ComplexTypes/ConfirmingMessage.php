<?php namespace DivideBV\Postnl\ComplexTypes;

class ConfirmingMessage extends BaseType
{

    /**
     * @var Customer
     */
    protected $Customer = null;

    /**
     * @var Message
     */
    protected $Message = null;

    /**
     * @var ArrayOfShipment
     */
    protected $Shipments = null;

    /**
     * @param Customer $Customer
     * @param Message $Message
     * @param ArrayOfShipment $Shipments
     */
    public function __construct(Customer $Customer, Message $Message, ArrayOfShipment $Shipments)
    {
        $this->setCustomer($Customer);
        $this->setMessage($Message);
        $this->setShipments($Shipments);
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
     * @return ConfirmingMessage
     */
    public function setCustomer($Customer)
    {
        $this->Customer = $Customer;
        return $this;
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
     * @return ConfirmingMessage
     */
    public function setMessage($Message)
    {
        $this->Message = $Message;
        return $this;
    }

    /**
     * @return ArrayOfShipment
     */
    public function getShipments()
    {
        return $this->Shipments;
    }

    /**
     * @param ArrayOfShipment $Shipments
     * @return ConfirmingMessage
     */
    public function setShipments($Shipments)
    {
        $this->Shipments = $Shipments;
        return $this;
    }
}
