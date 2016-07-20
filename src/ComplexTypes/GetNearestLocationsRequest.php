<?php namespace DivideBV\Postnl\ComplexTypes;

class GetNearestLocationsRequest extends BaseType
{

    /**
     * @var Message $Message
     */
    protected $Message = null;

    /**
     * @var Location $Location
     */
    protected $Location = null;

    /**
     * @var string $Countrycode
     */
    protected $Countrycode = 'NL';

    /**
     * GetNearestLocationsRequest constructor.
     * @param Message $Message
     * @param Location $Location
     */
    public function __construct(Message $Message, Location $Location, $countryCode) {
        $this->setMessage($Message);
        $this->setLocation($Location);
        $this->setCountrycode($countryCode);
    }

    /**
     * @return Message
     */
    public function getMessage()
    {
        return $this->Message;
    }

    /**
     * @param $Message
     * @return $this
     */
    public function setMessage($Message)
    {
        $this->Message = $Message;
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
     * @param $Location
     * @return $this
     */
    public function setLocation($Location)
    {
        $this->Location = $Location;
        return $this;
    }

    /**
     * @return string
     */
    public function getCountrycode()
    {
        return $this->Countrycode;
    }

    /**
     * @param $Countrycode
     * @return $this
     */
    public function setCountrycode($Countrycode)
    {
        $this->Countrycode = $Countrycode;
        return $this;
    }
}
