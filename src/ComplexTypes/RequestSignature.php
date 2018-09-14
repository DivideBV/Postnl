<?php namespace DivideBV\Postnl\ComplexTypes;

class RequestSignature extends BaseType
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
     * @return RequestSignature
     */
    public function setBarcode($Barcode)
    {
        $this->Barcode = $Barcode;
        return $this;
    }
}
