<?php namespace DivideBV\Postnl\ComplexTypes;

class TimeframeRequest extends BaseType
{

    /**
     * @var string $City
     */
    protected $City = null;

    /**
     * @var string $CountryCode
     */
    protected $CountryCode = null;

    /**
     * @var string $EndDate
     */
    protected $EndDate = null;

    /**
     * @var string $HouseNr
     */
    protected $HouseNr = null;

    /**
     * @var string $HouseNrExt
     */
    protected $HouseNrExt = null;

    /**
     * @var string[] $Options
     */
    protected $Options = null;

    /**
     * @var string $PostalCode
     */
    protected $PostalCode = null;

    /**
     * @var string $StartDate
     */
    protected $StartDate = null;

    /**
     * @var string $Street
     */
    protected $Street = null;

    /**
     * @var bool $SundaySorting
     */
    protected $SundaySorting = null;

    /**
     * @param string $Postalcode
     * @param string $houseNr
     * @param string[] $Options
     * @param date $StartDate
     */
    public function __construct($Postalcode, $houseNr, $Options = ['Daytime'], $StartDate = null, $EndDate = null)
    {
        $this->setSundaySorting('true');
        $this->setStartDate($StartDate ?: date('d-m-Y'));
        $this->setEndDate($EndDate ?: date('d-m-Y', time() + 60 * 60 * 24 * 7));
        $this->setPostalCode($Postalcode);
        $this->setOptions($Options);
        $this->setHouseNr($houseNr);
        $this->setCountryCode('NL');
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
     * @return ArrayOfstring
     */
    public function getOptions()
    {
      return $this->Options;
    }

    /**
     * @param ArrayOfstring $Options
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
     * @return bool
     */
    public function getSundaySorting()
    {
      return $this->SundaySorting;
    }

    /**
     * @param bool $SundaySorting
     * @return TimeframeRequest
     */
    public function setSundaySorting($SundaySorting)
    {
      $this->SundaySorting = $SundaySorting;
      return $this;
    }

}
