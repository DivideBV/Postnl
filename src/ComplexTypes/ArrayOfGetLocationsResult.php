<?php namespace DivideBV\Postnl\ComplexTypes;

class ArrayOfGetLocationsResult extends BaseArrayOfType
{

    /**
     * The name of the array property this class is a wrapper of.
     */
    const WRAPPED_PROPERTY = 'GetLocationsResult';

    /**
     * @var GetLocationsResult[] $LocationsResult
     */
    protected $LocationsResult = null;

    /**
     * @param GetLocationsResult[] $LocationsResult
     */
    public function __construct(array $LocationsResult)
    {
        $this->setLocationsResult($LocationsResult);
    }

    /**
     * @return GetLocationsResult[]
     */
    public function getLocationsResult()
    {
        return $this->LocationsResult;
    }

    /**
     * @param GetLocationsResult[] $LocationsResult
     * @return ArrayOfGetLocationsResult
     */
    public function setLocationsResult(array $LocationsResult)
    {
        $this->LocationsResult = $LocationsResult;
        return $this;
    }
}
