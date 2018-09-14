<?php namespace DivideBV\Postnl\ComplexTypes;

class CurrentStatusResponse extends BaseType
{

    /**
     * @var ArrayOfCurrentStatusResponseShipment
     */
    protected $Shipments = null;

    /**
     * @param ArrayOfCurrentStatusResponseShipment $Shipments
     */
    public function __construct(ArrayOfCurrentStatusResponseShipment $Shipments)
    {
        $this->setShipments($Shipments);
    }

    /**
     * @return ArrayOfCurrentStatusResponseShipment
     */
    public function getShipments()
    {
        return $this->Shipments;
    }

    /**
     * @param ArrayOfCurrentStatusResponseShipment $Shipments
     * @return CurrentStatusResponse
     */
    public function setShipments($Shipments)
    {
        $this->Shipments = $Shipments;
        return $this;
    }
}
