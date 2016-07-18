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
    public function __construct(
        Message $Message,
        Location $Location
    ) {
        $this->setMessage($Message);
        $this->setLocation($Location);
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
     */
    public function setMessage($Message)
    {
        $this->Message = $Message;
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
     */
    public function setLocation($Location)
    {
        $this->Location = $Location;
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
     */
    public function setCountrycode($Countrycode)
    {
        $this->Countrycode = $Countrycode;
    }
}
