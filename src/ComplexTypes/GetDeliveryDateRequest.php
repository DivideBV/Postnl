<?php namespace DivideBV\Postnl\ComplexTypes;

class GetDeliveryDateRequest extends BaseType
{

    /**
     * @var GetDeliveryDate $GetDeliveryDate
     */
    protected $GetDeliveryDate = null;

    /**
     * @var Message $Message
     */
    protected $Message = null;

    /**
     * @param Message $Message
     * @param GetDeliveryDate $GetDeliveryDate
     */
    public function __construct(Message $Message, GetDeliveryDate $GetDeliveryDate)
    {
        $this->setMessage($Message);
        $this->setGetDeliveryDate($GetDeliveryDate);
    }

    /**
     * @return GetDeliveryDate
     */
    public function getGetDeliveryDate()
    {
        return $this->GetDeliveryDate;
    }

    /**
     * @param GetDeliveryDate $GetDeliveryDate
     * @return GetDeliveryDateRequest
     */
    public function setGetDeliveryDate($GetDeliveryDate)
    {
        $this->GetDeliveryDate = $GetDeliveryDate;
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
     * @return GetDeliveryDateRequest
     */
    public function setMessage($Message)
    {
        $this->Message = $Message;
        return $this;
    }
}
