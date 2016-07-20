<?php namespace DivideBV\Postnl\ComplexTypes;

class Location extends BaseType
{

    /**
     * @var string $AllowSundaySorting
     */
    protected $AllowSundaySorting = null;

    /**
     * @var string $DeliveryDate
     */
    protected $DeliveryDate = null;

    /**
     * @var string $City
     */
    protected $City = null;

    /**
     * @var string $Postalcode
     */
    protected $Postalcode = null;

    /**
     * @var array $DeliveryOptions
     */
    protected $DeliveryOptions = [];

    /**
     * @var array $Options
     */
    protected $Options = [];

    /**
     * Location constructor.
     * @param $Postalcode
     * @param string $AllowSundaySorting
     * @param date $DeliveryDate
     */
    public function __construct($Postalcode, $AllowSundaySorting = "false", $DeliveryDate = null)
    {
        $this->setAllowSundaySorting($AllowSundaySorting);
        $this->setDeliveryDate($DeliveryDate ?: (new \DateTime('next monday'))->format('d-m-Y'));

        $this->setPostalcode($Postalcode);

        $this->setDeliveryOptions(['PG']);
        $this->setOptions(['Daytime']);
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
     */
    public function setAllowSundaySorting($AllowSundaySorting)
    {
        $this->AllowSundaySorting = $AllowSundaySorting;
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
     */
    public function setDeliveryDate($DeliveryDate)
    {
        $this->DeliveryDate = $DeliveryDate;
    }

    /**
     * @return null
     */
    public function getCity()
    {
        return $this->City;
    }

    /**
     * @param null $City
     */
    public function setCity($City)
    {
        $this->City = $City;
    }

    /**
     * @return null
     */
    public function getPostalcode()
    {
        return $this->Postalcode;
    }

    /**
     * @param null $Postalcode
     */
    public function setPostalcode($Postalcode)
    {
        $this->Postalcode = $Postalcode;
    }

    /**
     * @return array
     */
    public function getDeliveryOptions()
    {
        return $this->DeliveryOptions;
    }

    /**
     * @param array $DeliveryOptions
     */
    public function setDeliveryOptions($DeliveryOptions)
    {
        $this->DeliveryOptions = $DeliveryOptions;
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
}
