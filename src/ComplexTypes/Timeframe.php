<?php namespace DivideBV\Postnl\ComplexTypes;

class Timeframe extends BaseType
{

    /**
     * @var string $Street
     */
    protected $Street = null;

    /**
     * @var string $HouseNr
     */
    protected $HouseNr = null;

    /**
     * @var string $HouseNrExt
     */
    protected $HouseNrExt = null;

    /**
     * @var string $City
     */
    protected $City = null;

    /**
     * @var array $CountryCode
     */
    protected $CountryCode = 'NL';

    /**
     * @var array $StartDate
     */
    protected $StartDate = null;

    /**
     * @var array $EndDate
     */
    protected $EndDate = null;

    /**
     * @var array $Options
     */
    protected $Options = null;

    /**
     * @var array $SundaySorting
     */
    protected $SundaySorting = null;

    /**
     * @var array $SundaySorting
     */
    protected $PostalCode = null;

    /**
     * Location constructor.
     * @param $Postalcode
     * @param string $AllowSundaySorting
     * @param date $DeliveryDate
     */
    public function __construct($Postalcode, $StartDate = null)
    {
        $this->setSundaySorting("true");
        $this->setStartDate($StartDate ?: date('d-m-Y'));
        $this->setEndDate(date('d-m-Y',time()+60*60*24*7));
        $this->setPostalCode($Postalcode);
        $this->setOptions(['Daytime','Evening','Morning','Noon','Sunday','Sameday','Afternoon']);
        //$this->setStreet('Eekschillersdreef');
        $this->setHouseNr(542);
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
     */
    public function setStreet($Street)
    {
        $this->Street = $Street;
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
     */
    public function setHouseNr($HouseNr)
    {
        $this->HouseNr = $HouseNr;
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
     */
    public function setHouseNrExt($HouseNrExt)
    {
        $this->HouseNrExt = $HouseNrExt;
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
     */
    public function setCity($City)
    {
        $this->City = $City;
    }

    /**
     * @return array
     */
    public function getCountryCode()
    {
        return $this->CountryCode;
    }

    /**
     * @param array $CountryCode
     */
    public function setCountryCode($CountryCode)
    {
        $this->CountryCode = $CountryCode;
    }

    /**
     * @return array
     */
    public function getStartDate()
    {
        return $this->StartDate;
    }

    /**
     * @param array $StartDate
     */
    public function setStartDate($StartDate)
    {
        $this->StartDate = $StartDate;
    }

    /**
     * @return array
     */
    public function getEndDate()
    {
        return $this->EndDate;
    }

    /**
     * @param array $EndDate
     */
    public function setEndDate($EndDate)
    {
        $this->EndDate = $EndDate;
    }

    /**
     * @return array
     */
    public function getOptions()
    {
        return $this->Options;
    }

    /**
     * @param array $Options
     */
    public function setOptions($Options)
    {
        $this->Options = $Options;
    }

    /**
     * @return array
     */
    public function getSundaySorting()
    {
        return $this->SundaySorting;
    }

    /**
     * @param array $SundaySorting
     */
    public function setSundaySorting($SundaySorting)
    {
        $this->SundaySorting = $SundaySorting;
    }

    /**
     * @return array
     */
    public function getPostalCode()
    {
        return $this->PostalCode;
    }

    /**
     * @param array $PostalCode
     */
    public function setPostalCode($PostalCode)
    {
        $this->PostalCode = $PostalCode;
    }
}
