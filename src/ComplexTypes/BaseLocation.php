<?php namespace DivideBV\Postnl\ComplexTypes;

class BaseLocation extends BaseType
{

    /**
     * @var string
     */
    protected $AllowSundaySorting = null;

    /**
     * @var string
     */
    protected $DeliveryDate = null;

    /**
     * @var string[]
     */
    protected $DeliveryOptions = null;

    /**
     * @var string
     */
    protected $OpeningTime = null;

    /**
     * @var string[]
     */
    protected $Options = null;

    /**
     * @param string $AllowSundaySorting
     * @param string $DeliveryDate
     * @param array $DeliveryOptions
     * @param array $Options
     */
    public function __construct($AllowSundaySorting, $DeliveryDate, $DeliveryOptions, $Options)
    {
        $this->setAllowSundaySorting($AllowSundaySorting);
        $this->setDeliveryDate($DeliveryDate ?: (new \DateTime('next monday'))->format('d-m-Y'));
        $this->setDeliveryOptions($DeliveryOptions);
        $this->setOptions($Options);
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
     * @return $this
     */
    public function setAllowSundaySorting($AllowSundaySorting)
    {
        $this->AllowSundaySorting = $AllowSundaySorting;
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
     * @return $this
     */
    public function setDeliveryDate($DeliveryDate)
    {
        $this->DeliveryDate = $DeliveryDate;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getDeliveryOptions()
    {
        return $this->DeliveryOptions;
    }

    /**
     * @param string[] $DeliveryOptions
     * @return $this
     */
    public function setDeliveryOptions($DeliveryOptions)
    {
        $this->DeliveryOptions = $DeliveryOptions;
        return $this;
    }

    /**
     * @return string
     */
    public function getOpeningTime()
    {
        return $this->OpeningTime;
    }

    /**
     * @param string $OpeningTime
     * @return $this
     */
    public function setOpeningTime($OpeningTime)
    {
        $this->OpeningTime = $OpeningTime;
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
     * @return $this
     */
    public function setOptions($Options)
    {
        $this->Options = $Options;
        return $this;
    }
}
