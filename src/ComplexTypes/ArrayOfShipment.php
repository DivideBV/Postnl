<?php namespace DivideBV\Postnl\ComplexTypes;

class ArrayOfShipment extends BaseType
{

    /**
     * @var Shipment[] $Shipment
     */
    protected $Shipment = null;

    /**
     * @param Shipment[] $Shipment
     */
    public function __construct(array $Shipment)
    {
        $this->setShipment($Shipment);
    }

    /**
     * @return Shipment[]
     */
    public function getShipment()
    {
        return $this->Shipment;
    }

    /**
     * @param Shipment[] $Shipment
     * @return ArrayOfShipment
     */
    public function setShipment(array $Shipment)
    {
        $this->Shipment = $Shipment;
        return $this;
    }
}
