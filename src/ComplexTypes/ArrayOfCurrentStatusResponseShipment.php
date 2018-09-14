<?php namespace DivideBV\Postnl\ComplexTypes;

class ArrayOfCurrentStatusResponseShipment extends BaseArrayOfType
{

    /**
     * @var string The name of the array property this class is a wrapper of.
     */
    const WRAPPED_PROPERTY = 'CurrentStatusResponseShipment';

    /**
     * @var CurrentStatusResponseShipment[]
     */
    protected $CurrentStatusResponseShipment = null;

    /**
     * @param CurrentStatusResponseShipment[] $CurrentStatusResponseShipment
     */
    public function __construct(array $CurrentStatusResponseShipment)
    {
        $this->setCurrentStatusResponseShipment($CurrentStatusResponseShipment);
    }

    /**
     * @return CurrentStatusResponseShipment[]
     */
    public function getCurrentStatusResponseShipment()
    {
        return $this->CurrentStatusResponseShipment;
    }

    /**
     * @param CurrentStatusResponseShipment[] $CurrentStatusResponseShipment
     * @return ArrayOfCurrentStatusResponseShipment
     */
    public function setCurrentStatusResponseShipment(array $CurrentStatusResponseShipment)
    {
        $this->CurrentStatusResponseShipment = $CurrentStatusResponseShipment;
        return $this;
    }
}
