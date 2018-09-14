<?php namespace DivideBV\Postnl\ComplexTypes;

class GetLocationsResponse extends BaseType
{

    /**
     * @var ArrayOfResponseLocation
     */
    protected $GetLocationsResult = null;

    /**
     * @var ArrayOfWarning
     */
    protected $Warnings = null;

    /**
     * @param ArrayOfResponseLocation $GetLocationsResult
     * @param ArrayOfWarning $Warnings
     */
    public function __construct(ArrayOfResponseLocation $GetLocationsResult, ArrayOfWarning $Warnings)
    {
        $this->setGetLocationsResult($GetLocationsResult);
        $this->setWarnings($Warnings);
    }

    /**
     * @return ArrayOfResponseLocation
     */
    public function getGetLocationsResult()
    {
        return $this->GetLocationsResult;
    }

    /**
     * @param ArrayOfResponseLocation $GetLocationsResult
     * @return GetLocationsResponse
     */
    public function setGetLocationsResult($GetLocationsResult)
    {
        $this->GetLocationsResult = $GetLocationsResult;
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
     * @return GetLocationsResponse
     */
    public function setWarnings($Warnings)
    {
        $this->Warnings = $Warnings;
        return $this;
    }
}
