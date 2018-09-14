<?php namespace DivideBV\Postnl\ComplexTypes;

class GetLocationRequest extends BaseType
{

    /**
     * @var string
     */
    protected $LocationCode = null;

    /**
     * @var Message
     */
    protected $Message = null;

    /**
     * @var string
     */
    protected $RetailNetworkID = null;

    /**
     * @param string $LocationCode
     * @param Message $Message
     * @param string $RetailNetworkID
     */
    public function __construct($LocationCode, Message $Message, $RetailNetworkID)
    {
        $this->LocationCode = $LocationCode;
        $this->Message = $Message;
        $this->RetailNetworkID = $RetailNetworkID;
    }

    /**
     * @return string
     */
    public function getLocationCode()
    {
        return $this->LocationCode;
    }

    /**
     * @param string $LocationCode
     * @return GetLocationRequest
     */
    public function setLocationCode($LocationCode)
    {
        $this->LocationCode = $LocationCode;
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
     * @return GetLocationRequest
     */
    public function setMessage($Message)
    {
        $this->Message = $Message;
        return $this;
    }

    /**
     * @return string
     */
    public function getRetailNetworkID()
    {
        return $this->RetailNetworkID;
    }

    /**
     * @param string $RetailNetworkID
     * @return GetLocationRequest
     */
    public function setRetailNetworkID($RetailNetworkID)
    {
        $this->RetailNetworkID = $RetailNetworkID;
        return $this;
    }
}
