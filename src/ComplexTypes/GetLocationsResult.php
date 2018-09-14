<?php namespace DivideBV\Postnl\ComplexTypes;

class GetLocationsResult extends BaseType
{

    /**
     * @var ArrayOfResponseLocation
     */
    protected $ResponseLocation = null;

    /**
     * @var ArrayOfWarning
     */
    protected $Warnings = null;

    /**
     * @param ArrayOfResponseLocation $ResponseLocation
     * @param ArrayOfWarning $Warnings
     */
    public function __construct(ArrayOfResponseLocation $ResponseLocation, ArrayOfWarning $Warnings)
    {
        $this->setResponseLocation($ResponseLocation);
        $this->setWarnings($Warnings);
    }

    /**
     * @return ArrayOfResponseLocation
     */
    public function getResponseLocation()
    {
        return $this->ResponseLocation;
    }

    /**
     * @param ArrayOfResponseLocation $ResponseLocation
     * @return GetLocationsResult
     */
    public function setResponseLocation($ResponseLocation)
    {
        $this->ResponseLocation = $ResponseLocation;
        return $this;
    }

    /**
     * @return ArrayOfWarning
     */
    public function getWarnings()
    {
        return $this->Warnings;
    }

    /**
     * @param ArrayOfWarning $Warnings
     * @return GetLocationsResult
     */
    public function setWarnings($Warnings)
    {
        $this->Warnings = $Warnings;
        return $this;
    }
}
