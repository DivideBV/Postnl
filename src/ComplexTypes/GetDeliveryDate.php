<?php namespace DivideBV\Postnl\ComplexTypes;

class GetDeliveryDate extends BaseType
{

    /**
     * @var string $AllowSundaySorting
     */
    protected $AllowSundaySorting = null;

    /**
     * @var string $City
     */
    protected $City = null;

    /**
     * @var string $CountryCode
     */
    protected $CountryCode = null;

    /**
     * @var ArrayOfCutOffTime $CutOffTimes
     */
    protected $CutOffTimes = null;

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
     * @var string $ShippingDate
     */
    protected $ShippingDate = null;

    /**
     * @var string $ShippingDuration
     */
    protected $ShippingDuration = null;

    /**
     * @var string $Street
     */
    protected $Street = null;

    /**
     * @param string $AllowSundaySorting
     * @param string $City
     * @param string $CountryCode
     * @param ArrayOfCutOffTime $CutOffTimes
     * @param string $HouseNr
     * @param string $HouseNrExt
     * @param string[] $Options
     * @param string $PostalCode
     * @param string $ShippingDate
     * @param string $ShippingDuration
     * @param string $Street
     */
    public function __construct(
        $AllowSundaySorting,
        $City,
        $CountryCode,
        ArrayOfCutOffTime $CutOffTimes,
        $HouseNr,
        $HouseNrExt,
        array $Options,
        $PostalCode,
        $ShippingDate,
        $ShippingDuration,
        $Street
    ) {
        $this->setAllowSundaySorting($AllowSundaySorting);
        $this->setCity($City);
        $this->setCountryCode($CountryCode);
        $this->setCutOffTimes($CutOffTimes);
        $this->setHouseNr($HouseNr);
        $this->setHouseNrExt($HouseNrExt);
        $this->setOptions($Options);
        $this->setPostalCode($PostalCode);
        $this->setShippingDate($ShippingDate);
        $this->setShippingDuration($ShippingDuration);
        $this->setStreet($Street);
    }

    /**
     * @return string
     */
    public function getAllowSundaySorting()
    {
        return $this->AllowSundaySorting;
    }

    /**
     * @param string $AllowSundaySorting
     * @return GetDeliveryDate
     */
    public function setAllowSundaySorting($AllowSundaySorting)
    {
        $this->AllowSundaySorting = $AllowSundaySorting;
        return $this;
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
     * @return GetDeliveryDate
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
     * @return GetDeliveryDate
     */
    public function setCountryCode($CountryCode)
    {
        $this->CountryCode = $CountryCode;
        return $this;
    }

    /**
     * @return ArrayOfCutOffTime
     */
    public function getCutOffTimes()
    {
        return $this->CutOffTimes;
    }

    /**
     * @param ArrayOfCutOffTime $CutOffTimes
     * @return GetDeliveryDate
     */
    public function setCutOffTimes(ArrayOfCutOffTime $CutOffTimes)
    {
        $this->CutOffTimes = $CutOffTimes;
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
     * @return GetDeliveryDate
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
     * @return GetDeliveryDate
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
     * @return GetDeliveryDate
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
     * @return GetDeliveryDate
     */
    public function setPostalCode($PostalCode)
    {
        $this->PostalCode = $PostalCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getShippingDate()
    {
        return $this->ShippingDate;
    }

    /**
     * @param string $ShippingDate
     * @return GetDeliveryDate
     */
    public function setShippingDate($ShippingDate)
    {
        $this->ShippingDate = $ShippingDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getShippingDuration()
    {
        return $this->ShippingDuration;
    }

    /**
     * @param string $ShippingDuration
     * @return GetDeliveryDate
     */
    public function setShippingDuration($ShippingDuration)
    {
        $this->ShippingDuration = $ShippingDuration;
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
     * @return GetDeliveryDate
     */
    public function setStreet($Street)
    {
        $this->Street = $Street;
        return $this;
    }
}
