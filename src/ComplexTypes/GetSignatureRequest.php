<?php namespace DivideBV\Postnl\ComplexTypes;

class GetSignatureRequest extends BaseType
{

    /**
     * @var Message $Message
     */
    protected $Message = null;

    /**
     * @var RequestCustomer $Customer
     */
    protected $Customer = null;

    /**
     * @var RequestSignature $Shipment
     */
    protected $Shipment = null;

    /**
     * @param Message $Message
     * @param RequestCustomer $Customer
     * @param RequestSignature $Shipment
     */
    public function __construct(
        Message $Message,
        RequestCustomer $Customer,
        RequestSignature $Shipment
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
     * @return GetSignatureRequest
     */
    public function setMessage(Message $Message)
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
     * @return GetSignatureRequest
     */
    public function setCustomer(RequestCustomer $Customer)
    {
        $this->Customer = $Customer;
        return $this;
    }

    /**
     * @return RequestSignature
     */
    public function getShipment()
    {
        return $this->Shipment;
    }

    /**
     * @param RequestSignature $Shipment
     * @return GetSignatureRequest
     */
    public function setShipment(RequestSignature $Shipment)
    {
        $this->Shipment = $Shipment;
        return $this;
    }
}
