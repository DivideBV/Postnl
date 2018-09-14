<?php namespace DivideBV\Postnl\ComplexTypes;

class GetNearestLocationsRequest extends BaseType
{

    /**
     * @var string
     */
    protected $Countrycode = null;

    /**
     * @var Location
     */
    protected $Location = null;

    /**
     * @var Message
     */
    protected $Message = null;

    /**
     * @param Message $Message
     * @param Location $Location
     * @param string $Countrycode
     */
    public function __construct(Message $Message, Location $Location, $Countrycode)
    {
        $this->setMessage($Message);
        $this->setLocation($Location);
        $this->setCountrycode($Countrycode);
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
     * @return GetNearestLocationsRequest
     */
    public function setCountrycode($Countrycode)
    {
        $this->Countrycode = $Countrycode;
        return $this;
    }

    /**
     * @return Location
     */
    public function getLocation()
    {
        return $this->Location;
    }

    /**
     * @param Location $Location
     * @return GetNearestLocationsRequest
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
     * @return GetNearestLocationsRequest
     */
    public function setMessage($Message)
    {
        $this->Message = $Message;
        return $this;
    }
}
