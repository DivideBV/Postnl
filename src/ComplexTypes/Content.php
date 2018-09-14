<?php namespace DivideBV\Postnl\ComplexTypes;

class Content extends BaseType
{

    /**
     * @var string
     */
    protected $CountryOfOrigin = null;

    /**
     * @var string
     */
    protected $Description = null;

    /**
     * @var string
     */
    protected $HSTariffNr = null;

    /**
     * @var string
     */
    protected $Quantity = null;

    /**
     * @var string
     */
    protected $Value = null;

    /**
     * @var string
     */
    protected $Weight = null;

    /**
     * @param string $CountryOfOrigin
     * @param string $Description
     * @param string $HSTariffNr
     * @param string $Quantity
     * @param string $Value
     * @param string $Weight
     */
    public function __construct($CountryOfOrigin, $Description, $HSTariffNr, $Quantity, $Value, $Weight)
    {
        $this->setCountryOfOrigin($CountryOfOrigin);
        $this->setDescription($Description);
        $this->setHSTariffNr($HSTariffNr);
        $this->setQuantity($Quantity);
        $this->setValue($Value);
        $this->setWeight($Weight);
    }

    /**
     * @return string
     */
    public function getCountryOfOrigin()
    {
        return $this->CountryOfOrigin;
    }

    /**
     * @param string $CountryOfOrigin
     * @return Content
     */
    public function setCountryOfOrigin($CountryOfOrigin)
    {
        $this->CountryOfOrigin = $CountryOfOrigin;
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
     * @return Content
     */
    public function setDescription($Description)
    {
        $this->Description = $Description;
        return $this;
    }

    /**
     * @return string
     */
    public function getHSTariffNr()
    {
        return $this->HSTariffNr;
    }

    /**
     * @param string $HSTariffNr
     * @return Content
     */
    public function setHSTariffNr($HSTariffNr)
    {
        $this->HSTariffNr = $HSTariffNr;
        return $this;
    }

    /**
     * @return string
     */
    public function getQuantity()
    {
        return $this->Quantity;
    }

    /**
     * @param string $Quantity
     * @return Content
     */
    public function setQuantity($Quantity)
    {
        $this->Quantity = $Quantity;
        return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->Value;
    }

    /**
     * @param string $Value
     * @return Content
     */
    public function setValue($Value)
    {
        $this->Value = $Value;
        return $this;
    }

    /**
     * @return string
     */
    public function getWeight()
    {
        return $this->Weight;
    }

    /**
     * @param string $Weight
     * @return Content
     */
    public function setWeight($Weight)
    {
        $this->Weight = $Weight;
        return $this;
    }
}
