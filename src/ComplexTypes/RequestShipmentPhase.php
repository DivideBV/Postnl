<?php namespace DivideBV\Postnl\ComplexTypes;

class RequestShipmentPhase extends BaseType
{

    /**
     * @var string
     */
    protected $PhaseCode = null;

    /**
     * @var string
     */
    protected $DateFrom = null;

    /**
     * @var string
     */
    protected $DateTo = null;

    /**
     * @param string $PhaseCode
     * @param string $DateFrom
     * @param string $DateTo
     */
    public function __construct($PhaseCode, $DateFrom, $DateTo)
    {
        $this->setPhaseCode($PhaseCode);
        $this->setDateFrom($DateFrom);
        $this->setDateTo($DateTo);
    }

    /**
     * @return string
     */
    public function getPhaseCode()
    {
        return $this->PhaseCode;
    }

    /**
     * @param string $PhaseCode
     * @return RequestShipmentPhase
     */
    public function setPhaseCode($PhaseCode)
    {
        $this->PhaseCode = $PhaseCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getDateFrom()
    {
        return $this->DateFrom;
    }

    /**
     * @param string $DateFrom
     * @return RequestShipmentPhase
     */
    public function setDateFrom($DateFrom)
    {
        $this->DateFrom = $DateFrom;
        return $this;
    }

    /**
     * @return string
     */
    public function getDateTo()
    {
        return $this->DateTo;
    }

    /**
     * @param string $DateTo
     * @return RequestShipmentPhase
     */
    public function setDateTo($DateTo)
    {
        $this->DateTo = $DateTo;
        return $this;
    }
}
