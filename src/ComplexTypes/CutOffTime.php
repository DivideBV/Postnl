<?php namespace DivideBV\Postnl\ComplexTypes;

class CutOffTime extends BaseType
{

    /**
     * @var string
     */
    protected $Day = null;

    /**
     * @var string
     */
    protected $Time = null;

    /**
     * @param string $Day
     * @param string $Time
     */
    public function __construct($Day, $Time)
    {
        $this->setDay($Day);
        $this->setTime($Time);
    }

    /**
     * @return string
     */
    public function getDay()
    {
        return $this->Day;
    }

    /**
     * @param string $Day
     * @return CutOffTime
     */
    public function setDay($Day)
    {
        $this->Day = $Day;
        return $this;
    }

    /**
     * @return string
     */
    public function getTime()
    {
        return $this->Time;
    }

    /**
     * @param string $Time
     * @return CutOffTime
     */
    public function setTime($Time)
    {
        $this->Time = $Time;
        return $this;
    }
}
