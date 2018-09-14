<?php namespace DivideBV\Postnl\ComplexTypes;

class GetSentDate extends BaseType
{

    /**
     * @var string
     */
    protected $AllowSundaySorting = null;

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
    protected $DeliveryDate = null;

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
    protected $ShippingDuration = null;

    /**
     * @var string
     */
    protected $Street = null;

    /**
     * @param string $AllowSundaySorting
     * @param string $City
     * @param string $CountryCode
     * @param string $DeliveryDate
     * @param string $HouseNr
     * @param string $HouseNrExt
     * @param string[] $Options
     * @param string $PostalCode
     * @param string $ShippingDuration
     * @param string $Street
     */
    public function __construct(
        $AllowSundaySorting,
        $City,
        $CountryCode,
        $DeliveryDate,
        $HouseNr,
        $HouseNrExt,
        array $Options,
        $PostalCode,
        $ShippingDuration,
        $Street
    ) {
        $this->setAllowSundaySorting($AllowSundaySorting);
        $this->setCity($City);
        $this->setCountryCode($CountryCode);
        $this->setDeliveryDate($DeliveryDate);
        $this->setHouseNr($HouseNr);
        $this->setHouseNrExt($HouseNrExt);
        $this->setOptions($Options);
        $this->setPostalCode($PostalCode);
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
     * @return GetSentDate
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
     * @return GetSentDate
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
     * @return GetSentDate
     */
    public function setCountryCode($CountryCode)
    {
        $this->CountryCode = $CountryCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryDate()
    {
        return $this->DeliveryDate;
    }

    /**
     * @param string $DeliveryDate
     * @return GetSentDate
     */
    public function setDeliveryDate($DeliveryDate)
    {
        $this->DeliveryDate = $DeliveryDate;
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
     * @return GetSentDate
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
     * @return GetSentDate
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
     * @return GetSentDate
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
     * @return GetSentDate
     */
    public function setPostalCode($PostalCode)
    {
        $this->PostalCode = $PostalCode;
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
     * @return GetSentDate
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
     * @return GetSentDate
     */
    public function setStreet($Street)
    {
        $this->Street = $Street;
        return $this;
    }
}
