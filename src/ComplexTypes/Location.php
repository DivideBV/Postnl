<?php namespace DivideBV\Postnl\ComplexTypes;

use DateTime;

/**
 * XML namespace: http://postnl.nl/cif/domain/BarcodeWebService/
 */
class Location extends BaseType
{

    /**
     * @var string $MessageID
     */
    protected $AllowSundaySorting = null;

    /**
     * @var string $MessageTimeStamp
     */
    protected $DeliveryDate = null;

    /**
     * @var strint $City
     */
    protected $City = null;

    /**
     * @var string $Postalcode
     */
    protected $Postalcode = null;

    /**
     * @var array $DeliveryOptions
     */
    protected $DeliveryOptions = array();

    /**
     * @var array $Options
     */
    protected $Options = array();


    /**
     * Location constructor.
     * @param $Postcalcode
     * @param string $AllowSundaySorting
     * @param null $DeliveryDate
     */
    public function __construct($Postcalcode, $AllowSundaySorting = "false", $DeliveryDate = null)
    {
        $this->setAllowSundaySorting($AllowSundaySorting);
        $this->setDeliveryDate($DeliveryDate ?: date('d-m-Y',strtotime('next monday')));

        $this->setPostalcode($Postcalcode);

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
