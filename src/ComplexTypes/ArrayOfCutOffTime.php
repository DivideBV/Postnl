<?php namespace DivideBV\Postnl\ComplexTypes;

class ArrayOfCutOffTime extends BaseArrayOfType
{

    /**
     * The name of the array property this class is a wrapper of.
     */
    const WRAPPED_PROPERTY = 'CutOffTime';

    /**
     * @var CutOffTime[] $CutOffTime
     */
    protected $CutOffTime = null;

    /**
     * @param CutOffTime[] $CutOffTime
     */
    public function __construct(array $CutOffTime)
    {
        $this->setCutOffTime($CutOffTime);
    }

    /**
     * @return CutOffTime[]
     */
    public function getCutOffTime()
    {
        return $this->CutOffTime;
    }

    /**
     * @param CutOffTime[] $CutOffTime
     * @return ArrayOfCutOffTime
     */
    public function setCutOffTime(array $CutOffTime)
    {
        $this->CutOffTime = $CutOffTime;
        return $this;
    }
}
