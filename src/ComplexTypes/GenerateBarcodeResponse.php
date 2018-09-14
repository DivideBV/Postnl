<?php namespace DivideBV\Postnl\ComplexTypes;

/**
 * XML namespace: http://postnl.nl/cif/domain/BarcodeWebService/
 */
class GenerateBarcodeResponse extends BaseType
{

    /**
     * @var string
     */
    protected $Barcode = null;

    /**
     * @param string $Barcode
     */
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

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->Barcode;
    }
}
