<?php namespace DivideBV\Postnl\ComplexTypes;

class LocationArea extends BaseLocation
{

    /**
     * @var Coordinate $CoordinatesNorthWest
     */
    protected $CoordinatesNorthWest = null;

    /**
     * @var Coordinate $CoordinatesSouthEast
     */
    protected $CoordinatesSouthEast = null;

    /**
     * @return Coordinate
     */
    public function getCoordinatesNorthWest()
    {
        return $this->CoordinatesNorthWest;
    }

    /**
     * @param Coordinate $CoordinatesNorthWest
     * @return LocationArea
     */
    public function setCoordinatesNorthWest($CoordinatesNorthWest)
    {
        $this->CoordinatesNorthWest = $CoordinatesNorthWest;
        return $this;
    }

    /**
     * @return Coordinate
     */
    public function getCoordinatesSouthEast()
    {
        return $this->CoordinatesSouthEast;
    }

    /**
     * @param Coordinate $CoordinatesSouthEast
     * @return LocationArea
     */
    public function setCoordinatesSouthEast($CoordinatesSouthEast)
    {
        $this->CoordinatesSouthEast = $CoordinatesSouthEast;
        return $this;
    }
}
