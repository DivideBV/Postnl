<?php namespace DivideBV\Postnl\ComplexTypes;

/**
 * XML namespace: http://postnl.nl/cif/domain/BarcodeWebService/
 */
class GetNearestLocationsResponse extends BaseType
{

    /**
     * @var ArrayOfGetLocationsResult $NearestLocationsResult
     */
    protected $NearestLocationsResult = null;

    /**
     * @var ArrayOfWarning $Warning
     */
    protected $Warnings = null;

    /**
     * @param ArrayOfGetLocationsResult $NearestLocationsResult
     * @param ArrayOfWarning $Warnings
     */
    public function __construct($NearestLocationsResult, $Warnings)
    {
        $this->setNearestLocationsResult($NearestLocationsResult);
        $this->setWarnings($Warnings);
    }

    /**
     * @return ArrayOfGetLocationsResult
     */
    public function getNearestLocations()
    {
        return $this->NearestLocationsResult;
    }

    /**
     * @param ArrayOfGetLocationsResult $NearestLocationsResult
     * @return GetNearestLocationsResponse
     */
    public function setNearestLocation($NearestLocationsResult)
    {
        $this->NearestLocationsResult = $NearestLocationsResult;
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
     * @return GetSignatureResponse
     */
    public function setWarnings($Warnings)
    {
        $this->Warnings = $Warnings;
        return $this;
    }
}
