<?php namespace DivideBV\Postnl\ComplexTypes;

class ArrayOfResponseLocation extends BaseArrayOfType
{

    /**
     * The name of the array property this class is a wrapper of.
     */
    const WRAPPED_PROPERTY = 'ResponseLocation';

    /**
     * @var ResponseLocation[] $ResponseLocation
     */
    protected $ResponseLocation = null;

    /**
     * @param ResponseLocation[] $ResponseLocation
     */
    public function __construct(array $ResponseLocation)
    {
        $this->setResponseLocation($ResponseLocation);
    }

    /**
     * @return ResponseLocation[]
     */
    public function getResponseLocation()
    {
        return $this->ResponseLocation;
    }

    /**
     * @param ResponseLocation[] $ResponseLocation
     * @return ArrayOfResponseLocation
     */
    public function setResponseLocation(array $ResponseLocation)
    {
        $this->ResponseLocation = $ResponseLocation;
        return $this;
    }
}
