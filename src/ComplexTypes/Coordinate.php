<?php namespace DivideBV\Postnl\ComplexTypes;

class Coordinate extends BaseType
{

    /**
     * @var string
     */
    protected $Latitude = null;

    /**
     * @var string
     */
    protected $Longitude = null;

    /**
     * @param string $Latitude
     * @param string $Longtitude
     */
    public function __construct($Latitude, $Longtitude)
    {
        $this->setLatitude($Latitude);
        $this->setLongitude($Longtitude);
    }

    /**
     * @return string
     */
    public function getLatitude()
    {
        return $this->Latitude;
    }

    /**
     * @param string $Latitude
     * @return Coordinate
     */
    public function setLatitude($Latitude)
    {
        $this->Latitude = $Latitude;
        return $this;
    }

    /**
     * @return string
     */
    public function getLongitude()
    {
        return $this->Longitude;
    }

    /**
     * @param string $Longitude
     * @return Coordinate
     */
    public function setLongitude($Longitude)
    {
        $this->Longitude = $Longitude;
        return $this;
    }
}
