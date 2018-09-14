<?php namespace DivideBV\Postnl\ComplexTypes;

class Contact extends BaseType
{

    /**
     * @var string
     */
    protected $ContactType = null;

    /**
     * @var string
     */
    protected $Email = null;

    /**
     * @var string
     */
    protected $SMSNr = null;

    /**
     * @var string
     */
    protected $TelNr = null;

    /**
     * @param string $ContactType
     * @param string $Email
     * @param string $SMSNr
     * @param string $TelNr
     */
    public function __construct($ContactType, $Email, $SMSNr, $TelNr)
    {
        $this->setContactType($ContactType);
        $this->setEmail($Email);
        $this->setSMSNr($SMSNr);
        $this->setTelNr($TelNr);
    }

    /**
     * @return string
     */
    public function getContactType()
    {
        return $this->ContactType;
    }

    /**
     * @param string $ContactType
     * @return Contact
     */
    public function setContactType($ContactType)
    {
        $this->ContactType = $ContactType;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->Email;
    }

    /**
     * @param string $Email
     * @return Contact
     */
    public function setEmail($Email)
    {
        $this->Email = $Email;
        return $this;
    }

    /**
     * @return string
     */
    public function getSMSNr()
    {
        return $this->SMSNr;
    }

    /**
     * @param string $SMSNr
     * @return Contact
     */
    public function setSMSNr($SMSNr)
    {
        $this->SMSNr = $SMSNr;
        return $this;
    }

    /**
     * @return string
     */
    public function getTelNr()
    {
        return $this->TelNr;
    }

    /**
     * @param string $TelNr
     * @return Contact
     */
    public function setTelNr($TelNr)
    {
        $this->TelNr = $TelNr;
        return $this;
    }
}
