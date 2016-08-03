<?php namespace DivideBV\Postnl\ComplexTypes;

class ArrayOfTimeframe extends BaseArrayOfType
{

    /**
     * The name of the array property this class is a wrapper of.
     */
    const WRAPPED_PROPERTY = 'Timeframe';

    /**
     * @var Timeframe[] $Timeframe
     */
    protected $Timeframe = null;

    /**
     * @param Timeframe[] $Timeframe
     */
    public function __construct(array $Timeframe)
    {
        $this->setTimeframe($Timeframe);
    }

    /**
     * @return Timeframe[]
     */
    public function getTimeframe()
    {
        return $this->Timeframe;
    }

    /**
     * @param Timeframe[] $Timeframe
     * @return ArrayOfTimeframe
     */
    public function setTimeframe(array $Timeframe)
    {
        $this->Timeframe = $Timeframe;
        return $this;
    }
}
