<?php namespace DivideBV\Postnl\ComplexTypes;

class ConfirmingResponseShipment extends BaseType
{

    /**
     * @var string $Barcode
     */
    protected $Barcode = null;

    /**
     * @var ArrayOfWarning $Warnings
     */
    protected $Warnings = null;

    /**
     * @param string $Barcode
     * @param ArrayOfWarning $Warnings
     */
    public function __construct($Barcode, ArrayOfWarning $Warnings)
    {
        $this->setBarcode($Barcode);
        $this->setWarnings($Warnings);
    }

    /**
     * @return string
     */
    public function getBarcode()
    {
        return $this->Barcode;
    }

    /**
     * @param string $Barcode
     * @return ConfirmingResponseShipment
     */
    public function setBarcode($Barcode)
    {
        $this->Barcode = $Barcode;
        return $this;
    }

    /**
     * @return ArrayOfWarning
     */
    public function getWarnings()
    {
        return $this->Warnings;
    }

    /**
     * @param ArrayOfWarning $Warnings
     * @return ConfirmingResponseShipment
     */
    public function setWarnings($Warnings)
    {
        $this->Warnings = $Warnings;
        return $this;
    }
}
