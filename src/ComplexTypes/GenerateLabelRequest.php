<?php namespace DivideBV\Postnl\ComplexTypes;

class GenerateLabelRequest extends BaseType
{

    /**
     * @var LabellingMessage
     */
    protected $Message = null;

    /**
     * @var Customer
     */
    protected $Customer = null;

    /**
     * @var ArrayOfShipment
     */
    protected $Shipments = null;

    /**
     * @var string In base64 encoding.
     */
    protected $LabelSignature;

    /**
     * @param LabellingMessage $Message
     * @param Customer $Customer
     * @param ArrayOfShipment $Shipments
     * @param string $LabelSignature In base64 encoding.
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
     * @return string In base64 encoding.
     */
    public function getLabelSignature()
    {
        return $this->LabelSignature;
    }

    /**
     * @param string $LabelSignature In base64 encoding.
     * @return GenerateLabelRequest
     */
    public function setLabelSignature($LabelSignature)
    {
        $this->LabelSignature = $LabelSignature;
        return $this;
    }
}
