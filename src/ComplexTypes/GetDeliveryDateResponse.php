<?php namespace DivideBV\Postnl\ComplexTypes;

class GetDeliveryDateResponse extends BaseType
{

    /**
     * @var string
     */
    protected $DeliveryDate = null;

    /**
     * @var string[]
     */
    protected $Options = null;

    /**
     * @param string $DeliveryDate
     * @param array $Options
     */
    public function __construct($DeliveryDate, array $Options)
    {
        $this->setDeliveryDate($DeliveryDate);
        $this->setOptions($Options);
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
     * @return GetDeliveryDateResponse
     */
    public function setDeliveryDate($DeliveryDate)
    {
        $this->DeliveryDate = $DeliveryDate;
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
     * @return GetDeliveryDateResponse
     */
    public function setOptions(array $Options)
    {
        $this->Options = $Options;
        return $this;
    }
}
