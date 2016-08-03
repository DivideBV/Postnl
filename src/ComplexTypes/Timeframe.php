<?php namespace DivideBV\Postnl\ComplexTypes;

class Timeframe extends BaseType
{

    /**
     * @var string $Date
     */
    protected $Date = null;

    /**
     * @var ArrayOfTimeframeTimeFrame $Timeframes
     */
    protected $Timeframes = null;

    /**
     * @param string $Date
     * @param ArrayOfTimeframeTimeFrame $Timeframes
     */
    public function __construct($Date, ArrayOfTimeframeTimeFrame $Timeframes)
    {
        $this->setDate($Date);
        $this->setTimeframes($Timeframes);
    }

    /**
     * @return string
     */
    public function getDate()
    {
        return $this->Date;
    }

    /**
     * @param string $Date
     * @return Timeframe
     */
    public function setDate($Date)
    {
        $this->Date = $Date;
        return $this;
    }

    /**
     * @return ArrayOfTimeframeTimeFrame
     */
    public function getTimeframes()
    {
        return $this->Timeframes;
    }

    /**
     * @param ArrayOfTimeframeTimeFrame $Timeframes
     * @return Timeframe
     */
    public function setTimeframes($Timeframes)
    {
        $this->Timeframes = $Timeframes;
        return $this;
    }
}
