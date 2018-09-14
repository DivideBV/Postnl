<?php namespace DivideBV\Postnl\ComplexTypes;

class TimeframeRequest extends BaseType
{

    /**
     * @var string
     */
    protected $City = null;

    /**
     * @var string
     */
    protected $CountryCode = null;

    /**
     * @var string
     */
    protected $EndDate = null;

    /**
     * @var string
     */
    protected $HouseNr = null;

    /**
     * @var string
     */
    protected $HouseNrExt = null;

    /**
     * @var string[]
     */
    protected $Options = null;

    /**
     * @var string
     */
    protected $PostalCode = null;

    /**
     * @var string
     */
    protected $StartDate = null;

    /**
     * @var string
     */
    protected $Street = null;

    /**
     * @var string
     */
    protected $SundaySorting = null;

    /**
     * @param string $Postalcode
     * @param string $HouseNr
     * @param string[] $Options
     * @param string $StartDate
     * @param string $EndDate
     * @param string $CountryCode
     * @param string $SundaySorting
     */
    public function __construct(
        $Postalcode,
        $HouseNr,
        $Options,
        $StartDate,
        $EndDate,
        $CountryCode,
        $SundaySorting
    ) {
        $this->setStartDate($StartDate ?: (new \DateTime)->format('d-m-Y'));
        $this->setEndDate($EndDate ?: (new \DateTime('+1 week'))->format('d-m-Y'));
        $this->setPostalCode($Postalcode);
        $this->setOptions($Options);
        $this->setHouseNr($HouseNr);
        $this->setCountryCode($CountryCode);
        $this->setSundaySorting($SundaySorting);
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->City;
    }

    /**
     * @param string $City
     * @return TimeframeRequest
     */
    public function setCity($City)
    {
        $this->City = $City;
        return $this;
    }

    /**
     * @return string
     */
    public function getCountryCode()
    {
        return $this->CountryCode;
    }

    /**
     * @param string $CountryCode
     * @return TimeframeRequest
     */
    public function setCountryCode($CountryCode)
    {
        $this->CountryCode = $CountryCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getEndDate()
    {
        return $this->EndDate;
    }

    /**
     * @param string $EndDate
     * @return TimeframeRequest
     */
    public function setEndDate($EndDate)
    {
        $this->EndDate = $EndDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getHouseNr()
    {
        return $this->HouseNr;
    }

    /**
     * @param string $HouseNr
     * @return TimeframeRequest
     */
    public function setHouseNr($HouseNr)
    {
        $this->HouseNr = $HouseNr;
        return $this;
    }

    /**
     * @return string
     */
    public function getHouseNrExt()
    {
        return $this->HouseNrExt;
    }

    /**
     * @param string $HouseNrExt
     * @return TimeframeRequest
     */
    public function setHouseNrExt($HouseNrExt)
    {
        $this->HouseNrExt = $HouseNrExt;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getOptions()
    {
        return $this->Options;
    }

    /**
     * @param string[] $Options
     * @return TimeframeRequest
     */
    public function setOptions($Options)
    {
        $this->Options = $Options;
        return $this;
    }

    /**
     * @return string
     */
    public function getPostalCode()
    {
        return $this->PostalCode;
    }

    /**
     * @param string $PostalCode
     * @return TimeframeRequest
     */
    public function setPostalCode($PostalCode)
    {
        $this->PostalCode = $PostalCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getStartDate()
    {
        return $this->StartDate;
    }

    /**
     * @param string $StartDate
     * @return TimeframeRequest
     */
    public function setStartDate($StartDate)
    {
        $this->StartDate = $StartDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getStreet()
    {
        return $this->Street;
    }

    /**
     * @param string $Street
     * @return TimeframeRequest
     */
    public function setStreet($Street)
    {
        $this->Street = $Street;
        return $this;
    }

    /**
     * @return string
     */
    public function getSundaySorting()
    {
        return $this->SundaySorting;
    }

    /**
     * @param string $SundaySorting
     * @return TimeframeRequest
     */
    public function setSundaySorting($SundaySorting)
    {
        $this->SundaySorting = $SundaySorting;
        return $this;
    }
}
