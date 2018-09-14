<?php namespace DivideBV\Postnl\ComplexTypes;

class GetLocationsInAreaRequest extends BaseType
{

    /**
     * @var string
     */
    protected $Countrycode = null;

    /**
     * @var LocationArea
     */
    protected $Location = null;

    /**
     * @var Message
     */
    protected $Message = null;

    /**
     * @param string $Countrycode
     * @param LocationArea $Location
     * @param Message $Message
     */
    public function __construct($Countrycode, LocationArea $Location, Message $Message)
    {
        $this->Countrycode = $Countrycode;
        $this->Location = $Location;
        $this->Message = $Message;
    }

    /**
     * @return string
     */
    public function getCountrycode()
    {
        return $this->Countrycode;
    }

    /**
     * @param string $Countrycode
     * @return GetLocationsInAreaRequest
     */
    public function setCountrycode($Countrycode)
    {
        $this->Countrycode = $Countrycode;
        return $this;
    }

    /**
     * @return LocationArea
     */
    public function getLocation()
    {
        return $this->Location;
    }

    /**
     * @param LocationArea $Location
     * @return GetLocationsInAreaRequest
     */
    public function setLocation($Location)
    {
        $this->Location = $Location;
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
     * @return GetLocationsInAreaRequest
     */
    public function setMessage($Message)
    {
        $this->Message = $Message;
        return $this;
    }
}
