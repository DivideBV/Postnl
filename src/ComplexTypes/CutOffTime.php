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
     * @var boolean
     */
    protected $Available = false;    

    /**
     * @param string $Day
     * @param string $Time
     */
    public function __construct($Day, $Time, $Available)
    {
        $this->setDay($Day);
        $this->setTime($Time);
        $this->setAvailable($Available);
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

    /**
     * @return boolean
     */
    public function getAvailable()
    {
        return $this->Available;
    }

    /**
     * @param boolean $Available
     * @return CutOffTime
     */
    public function setAvailable($Available)
    {
        $this->Available = $Available;
        return $this;
    }
}
