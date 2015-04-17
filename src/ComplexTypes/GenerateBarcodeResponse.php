<?php namespace DivideBV\Postnl\ComplexTypes;

class GenerateBarcodeResponse
{

    /**
     * @var string $Barcode
     */
    protected $Barcode = null;

    public function __construct($Barcode)
    {
        $this->setBarcode($Barcode);
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
     * @return GenerateBarcodeResponse
     */
    public function setBarcode($Barcode)
    {
        $this->Barcode = $Barcode;
        return $this;
    }

}
