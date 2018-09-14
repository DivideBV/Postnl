<?php namespace DivideBV\Postnl\ComplexTypes;

class ResponseGroup extends BaseType
{

    /**
     * @var string
     */
    protected $GroupType = null;

    /**
     * @var string
     */
    protected $MainBarcode = null;

    /**
     * @var string
     */
    protected $ShipmentAmount = null;

    /**
     * @var string
     */
    protected $ShipmentCounter = null;

    /**
     * @param string $GroupType
     * @param string $MainBarcode
     * @param string $ShipmentAmount
     * @param string $ShipmentCounter
     */
    public function __construct(
        $GroupType,
        $MainBarcode,
        $ShipmentAmount,
        $ShipmentCounter
    ) {
        $this->setGroupType($GroupType);
        $this->setMainBarcode($MainBarcode);
        $this->setShipmentAmount($ShipmentAmount);
        $this->setShipmentCounter($ShipmentCounter);
    }

    /**
     * @return string
     */
    public function getGroupType()
    {
        return $this->GroupType;
    }

    /**
     * @param string $GroupType
     * @return ResponseGroup
     */
    public function setGroupType($GroupType)
    {
        $this->GroupType = $GroupType;
        return $this;
    }

    /**
     * @return string
     */
    public function getMainBarcode()
    {
        return $this->MainBarcode;
    }

    /**
     * @param string $MainBarcode
     * @return ResponseGroup
     */
    public function setMainBarcode($MainBarcode)
    {
        $this->MainBarcode = $MainBarcode;
        return $this;
    }

    /**
     * @return string
     */
    public function getShipmentAmount()
    {
        return $this->ShipmentAmount;
    }

    /**
     * @param string $ShipmentAmount
     * @return ResponseGroup
     */
    public function setShipmentAmount($ShipmentAmount)
    {
        $this->ShipmentAmount = $ShipmentAmount;
        return $this;
    }

    /**
     * @return string
     */
    public function getShipmentCounter()
    {
        return $this->ShipmentCounter;
    }

    /**
     * @param string $ShipmentCounter
     * @return ResponseGroup
     */
    public function setShipmentCounter($ShipmentCounter)
    {
        $this->ShipmentCounter = $ShipmentCounter;
        return $this;
    }
}
