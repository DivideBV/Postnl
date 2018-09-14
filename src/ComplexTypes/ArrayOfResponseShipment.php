<?php namespace DivideBV\Postnl\ComplexTypes;

class ArrayOfResponseShipment extends BaseArrayOfType
{

    /**
     * @var string The name of the array property this class is a wrapper of.
     */
    const WRAPPED_PROPERTY = 'ResponseShipment';

    /**
     * @var ResponseShipment[]
     */
    protected $ResponseShipment = null;

    /**
     * @param ResponseShipment[] $ResponseShipment
     */
    public function __construct(array $ResponseShipment)
    {
        $this->setResponseShipment($ResponseShipment);
    }

    /**
     * @return ResponseShipment[]
     */
    public function getResponseShipment()
    {
        return $this->ResponseShipment;
    }

    /**
     * @param ResponseShipment[] $ResponseShipment
     * @return ArrayOfResponseShipment
     */
    public function setResponseShipment(array $ResponseShipment)
    {
        $this->ResponseShipment = $ResponseShipment;
        return $this;
    }
}
