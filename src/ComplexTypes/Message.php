<?php namespace DivideBV\Postnl\ComplexTypes;

use DateTime;

/**
 * XML namespace: http://postnl.nl/cif/domain/BarcodeWebService/
 */
class Message extends BaseType
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
     *     Defaults to 1.
     * @param string $MessageTimeStamp
     *     Defaults to the current time.
     */
    public function __construct($MessageID = 1, $MessageTimeStamp = null)
    {
        $this->setMessageID($MessageID);
        $this->setMessageTimeStamp($MessageTimeStamp ?: (new DateTime)->format("d-m-Y H:i:s"));
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
