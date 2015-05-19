<?php namespace DivideBV\Postnl\ComplexTypes;

class ArrayOfConfirmingResponseShipment
{

    /**
     * @var ConfirmingResponseShipment[] $ConfirmingResponseShipment
     */
    protected $ConfirmingResponseShipment = null;

    /**
     * @param ConfirmingResponseShipment[] $ConfirmingResponseShipment
     */
    public function __construct(array $ConfirmingResponseShipment)
    {
        $this->setConfirmingResponseShipment($ConformingResponseShipment);
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
