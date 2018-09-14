<?php namespace DivideBV\Postnl\ComplexTypes;

class ResponseStatus extends BaseType
{

    /**
     * @var string
     */
    protected $CurrentPhaseCode = null;

    /**
     * @var string
     */
    protected $CurrentPhaseDescription = null;

    /**
     * @var string
     */
    protected $CurrentStatusCode = null;

    /**
     * @var string
     */
    protected $CurrentStatusDescription = null;

    /**
     * @var string
     */
    protected $CurrentStatusTimeStamp = null;

    /**
     * @param string $CurrentPhaseCode
     * @param string $CurrentPhaseDescription
     * @param string $CurrentStatusCode
     * @param string $CurrentStatusDescription
     * @param string $CurrentStatusTimeStamp
     */
    public function __construct(
        $CurrentPhaseCode,
        $CurrentPhaseDescription,
        $CurrentStatusCode,
        $CurrentStatusDescription,
        $CurrentStatusTimeStamp
    ) {
        $this->setCurrentPhaseCode($CurrentPhaseCode);
        $this->setCurrentPhaseDescription($CurrentPhaseDescription);
        $this->setCurrentStatusCode($CurrentStatusCode);
        $this->setCurrentStatusDescription($CurrentStatusDescription);
        $this->setCurrentStatusTimeStamp($CurrentStatusTimeStamp);
    }

    /**
     * @return string
     */
    public function getCurrentPhaseCode()
    {
        return $this->CurrentPhaseCode;
    }

    /**
     * @param string $CurrentPhaseCode
     * @return ResponseStatus
     */
    public function setCurrentPhaseCode($CurrentPhaseCode)
    {
        $this->CurrentPhaseCode = $CurrentPhaseCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getCurrentPhaseDescription()
    {
        return $this->CurrentPhaseDescription;
    }

    /**
     * @param string $CurrentPhaseDescription
     * @return ResponseStatus
     */
    public function setCurrentPhaseDescription($CurrentPhaseDescription)
    {
        $this->CurrentPhaseDescription = $CurrentPhaseDescription;
        return $this;
    }

    /**
     * @return string
     */
    public function getCurrentStatusCode()
    {
        return $this->CurrentStatusCode;
    }

    /**
     * @param string $CurrentStatusCode
     * @return ResponseStatus
     */
    public function setCurrentStatusCode($CurrentStatusCode)
    {
        $this->CurrentStatusCode = $CurrentStatusCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getCurrentStatusDescription()
    {
        return $this->CurrentStatusDescription;
    }

    /**
     * @param string $CurrentStatusDescription
     * @return ResponseStatus
     */
    public function setCurrentStatusDescription($CurrentStatusDescription)
    {
        $this->CurrentStatusDescription = $CurrentStatusDescription;
        return $this;
    }

    /**
     * @return string
     */
    public function getCurrentStatusTimeStamp()
    {
        return $this->CurrentStatusTimeStamp;
    }

    /**
     * @param string $CurrentStatusTimeStamp
     * @return ResponseStatus
     */
    public function setCurrentStatusTimeStamp($CurrentStatusTimeStamp)
    {
        $this->CurrentStatusTimeStamp = $CurrentStatusTimeStamp;
        return $this;
    }
}
