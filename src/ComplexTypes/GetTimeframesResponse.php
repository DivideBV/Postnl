<?php namespace DivideBV\Postnl\ComplexTypes;

class GetTimeframesResponse extends BaseType
{

    /**
     * @var ArrayOfReasonNoTimeframe
     */
    protected $ReasonNoTimeframes = null;

    /**
     * @var ArrayOfTimeframe
     */
    protected $Timeframes = null;

    /**
     * @param ArrayOfReasonNoTimeframe $ReasonNoTimeframes
     * @param ArrayOfTimeframe $Timeframes
     */
    public function __construct(ArrayOfReasonNoTimeframe $ReasonNoTimeframes, ArrayOfTimeframe $Timeframes)
    {
        $this->setReasonNoTimeframes($ReasonNoTimeframes);
        $this->setTimeframes($Timeframes);
    }

    /**
     * @return ArrayOfReasonNoTimeframe
     */
    public function getReasonNoTimeframes()
    {
        return $this->ReasonNoTimeframes;
    }

    /**
     * @param ArrayOfReasonNoTimeframe $ReasonNoTimeframes
     * @return GetTimeframesResponse
     */
    public function setReasonNoTimeframes($ReasonNoTimeframes)
    {
        $this->ReasonNoTimeframes = $ReasonNoTimeframes;
        return $this;
    }

    /**
     * @return ArrayOfTimeframe
     */
    public function getTimeframes()
    {
        return $this->Timeframes;
    }

    /**
     * @param ArrayOfTimeframe $Timeframes
     * @return GetTimeframesResponse
     */
    public function setTimeframes($Timeframes)
    {
        $this->Timeframes = $Timeframes;
        return $this;
    }
}
