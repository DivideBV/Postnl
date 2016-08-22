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
     * @var ArrayOfShipment $Shipments
     */
    protected $Shipments = null;

    /**
     * @var base64Binary $LabelSignature
     */
    protected $LabelSignature;

    /**
     * @param LabellingMessage $Message
     * @param Customer $Customer
     * @param ArrayOfShipment $Shipments
     * @param base64Binary $LabelSignature
     */
    public function __construct(
        LabellingMessage $Message,
        Customer $Customer,
        ArrayOfShipment $Shipments,
        $LabelSignature = null
    ) {
        $this->setMessage($Message);
        $this->setCustomer($Customer);
        $this->setShipments($Shipments);
        $this->setLabelSignature($LabelSignature);
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
     * @return ArrayOfShipment
     */
    public function getShipments()
    {
        return $this->Shipments;
    }

    /**
     * @param ArrayOfShipment $Shipments
     * @return GenerateLabelRequest
     */
    public function setShipments(ArrayOfShipment $Shipments)
    {
        $this->Shipments = $Shipments;
        return $this;
    }

    /**
     * @return base64Binary
     */
    public function getLabelSignature()
    {
        return $this->LabelSignature;
    }

    /**
     * @param base64Binary $LabelSignature
     * @return GenerateLabelRequest
     */
    public function setLabelSignature($LabelSignature)
    {
        $this->LabelSignature = $LabelSignature;
        return $this;
    }
}
