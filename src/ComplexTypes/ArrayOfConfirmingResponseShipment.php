<?php namespace DivideBV\Postnl\ComplexTypes;

class ArrayOfConfirmingResponseShipment extends BaseArrayOfType
{

    /**
     * @var string The name of the array property this class is a wrapper of.
     */
    const WRAPPED_PROPERTY = 'ConfirmingResponseShipment';

    /**
     * @var ConfirmingResponseShipment[]
     */
    protected $ConfirmingResponseShipment = null;

    /**
     * @param ConfirmingResponseShipment[] $ConfirmingResponseShipment
     */
    public function __construct(array $ConfirmingResponseShipment)
    {
        $this->setConfirmingResponseShipment($ConfirmingResponseShipment);
    }

    /**
     * @return ConfirmingResponseShipment[]
     */
    public function getConfirmingResponseShipment()
    {
        return $this->ConfirmingResponseShipment;
    }

    /**
     * @param ConfirmingResponseShipment[] $ConfirmingResponseShipment
     * @return ArrayOfConfirmingResponseShipment
     */
    public function setConfirmingResponseShipment(array $ConfirmingResponseShipment)
    {
        $this->ConfirmingResponseShipment = $ConfirmingResponseShipment;
        return $this;
    }
}
