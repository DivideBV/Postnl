<?php namespace DivideBV\Postnl\ComplexTypes;

/**
 * XML namespace: http://postnl.nl/cif/domain/BarcodeWebService/
 */
class Message
{

    /**
     * @var string $MessageID
     */
    protected $MessageID = null;

    /**
     * @var string $MessageTimeStamp
     */
    protected $MessageTimeStamp = null;

    /**
     * @param string $MessageID
     * @param string $MessageTimeStamp
     */
    public function __construct($MessageID, $MessageTimeStamp)
    {
        $this->setMessageID($MessageID);
        $this->setMessageTimeStamp($MessageTimeStamp);
    }

    /**
     * @return string
     */
    public function getMessageID()
    {
        return $this->MessageID;
    }

    /**
     * @param string $MessageID
     * @return Message
     */
    public function setMessageID($MessageID)
    {
        $this->MessageID = $MessageID;
        return $this;
    }

    /**
     * @return string
     */
    public function getMessageTimeStamp()
    {
        return $this->MessageTimeStamp;
    }

    /**
     * @param string $MessageTimeStamp
     * @return Message
     */
    public function setMessageTimeStamp($MessageTimeStamp)
    {
        $this->MessageTimeStamp = $MessageTimeStamp;
        return $this;
    }
}
