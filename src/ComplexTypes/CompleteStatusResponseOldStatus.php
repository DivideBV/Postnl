<?php namespace DivideBV\Postnl\ComplexTypes;

class CompleteStatusResponseOldStatus extends BaseType
{

    /**
     * @var string
     */
    protected $Code = null;

    /**
     * @var string
     */
    protected $Description = null;

    /**
     * @var string
     */
    protected $PhaseCode = null;

    /**
     * @var string
     */
    protected $PhaseDescription = null;

    /**
     * @var string
     */
    protected $TimeStamp = null;

    /**
     * @param string $Code
     * @param string $Description
     * @param string $PhaseCode
     * @param string $PhaseDescription
     * @param string $TimeStamp
     */
    public function __construct(
        $Code,
        $Description,
        $PhaseCode,
        $PhaseDescription,
        $TimeStamp
    ) {
        $this->setCode($Code);
        $this->setDescription($Description);
        $this->setPhaseCode($PhaseCode);
        $this->setPhaseDescription($PhaseDescription);
        $this->setTimeStamp($TimeStamp);
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->Code;
    }

    /**
     * @param string $Code
     * @return CompleteStatusResponseOldStatus
     */
    public function setCode($Code)
    {
        $this->Code = $Code;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * @param string $Description
     * @return CompleteStatusResponseOldStatus
     */
    public function setDescription($Description)
    {
        $this->Description = $Description;
        return $this;
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
     * @return CompleteStatusResponseOldStatus
     */
    public function setPhaseCode($PhaseCode)
    {
        $this->PhaseCode = $PhaseCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getPhaseDescription()
    {
        return $this->PhaseDescription;
    }

    /**
     * @param string $PhaseDescription
     * @return CompleteStatusResponseOldStatus
     */
    public function setPhaseDescription($PhaseDescription)
    {
        $this->PhaseDescription = $PhaseDescription;
        return $this;
    }

    /**
     * @return string
     */
    public function getTimeStamp()
    {
        return $this->TimeStamp;
    }

    /**
     * @param string $TimeStamp
     * @return CompleteStatusResponseOldStatus
     */
    public function setTimeStamp($TimeStamp)
    {
        $this->TimeStamp = $TimeStamp;
        return $this;
    }
}
