<?php namespace DivideBV\Postnl\ComplexTypes;

class GetSentDateRequest extends BaseType
{

    /**
     * @var GetSentDate $GetSentDate
     */
    protected $GetSentDate = null;

    /**
     * @var Message $Message
     */
    protected $Message = null;

    /**
     * @param Message $Message
     * @param GetSentDate $GetSentDate
     */
    public function __construct(Message $Message, GetSentDate $GetSentDate)
    {
        $this->setMessage($Message);
        $this->setGetSentDate($GetSentDate);
    }

    /**
     * @return GetSentDate
     */
    public function getGetSentDate()
    {
        return $this->GetSentDate;
    }

    /**
     * @param GetSentDate $GetSentDate
     * @return GetSentDateRequest
     */
    public function setGetSentDate($GetSentDate)
    {
        $this->GetSentDate = $GetSentDate;
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
     * @return GetSentDateRequest
     */
    public function setMessage($Message)
    {
        $this->Message = $Message;
        return $this;
    }
}
