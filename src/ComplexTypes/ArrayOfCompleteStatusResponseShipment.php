<?php namespace DivideBV\Postnl\ComplexTypes;

class ArrayOfCompleteStatusResponseShipment extends BaseArrayOfType
{

    /**
     * @var string The name of the array property this class is a wrapper of.
     */
    const WRAPPED_PROPERTY = 'CompleteStatusResponseShipment';

    /**
     * @var CompleteStatusResponseShipment[]
     */
    protected $CompleteStatusResponseShipment = null;

    /**
     * @param CompleteStatusResponseShipment[] $CompleteStatusResponseShipment
     */
    public function __construct(array $CompleteStatusResponseShipment)
    {
        $this->setCompleteStatusResponseShipment($CompleteStatusResponseShipment);
    }

    /**
     * @return CompleteStatusResponseShipment[]
     */
    public function getCompleteStatusResponseShipment()
    {
        return $this->CompleteStatusResponseShipment;
    }

    /**
     * @param CompleteStatusResponseShipment[] $CompleteStatusResponseShipment
     * @return ArrayOfCompleteStatusResponseShipment
     */
    public function setCompleteStatusResponseShipment(array $CompleteStatusResponseShipment)
    {
        $this->CompleteStatusResponseShipment = $CompleteStatusResponseShipment;
        return $this;
    }
}
