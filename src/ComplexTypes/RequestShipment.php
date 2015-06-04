<?php namespace DivideBV\Postnl\ComplexTypes;

class RequestShipment extends BaseType
{

    /**
     * @var string $Barcode
     */
    protected $Barcode = null;

    /**
     * @var string $Reference
     */
    protected $Reference = null;

    /**
     * @var string $Zipcode
     */
    protected $Zipcode = null;

    /**
     * @param string $Barcode
     * @param string $Reference
     * @param string $Zipcode
     */
    public function __construct($Barcode, $Reference, $Zipcode)
    {
        $this->setBarcode($Barcode);
        $this->setReference($Reference);
        $this->setZipcode($Zipcode);
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
     * @return RequestShipment
     */
    public function setBarcode($Barcode)
    {
        $this->Barcode = $Barcode;
        return $this;
    }

    /**
     * @return string
     */
    public function getReference()
    {
        return $this->Reference;
    }

    /**
     * @param string $Reference
     * @return RequestShipment
     */
    public function setReference($Reference)
    {
        $this->Reference = $Reference;
        return $this;
    }

    /**
     * @return string
     */
    public function getZipcode()
    {
        return $this->Zipcode;
    }

    /**
     * @param string $Zipcode
     * @return RequestShipment
     */
    public function setZipcode($Zipcode)
    {
        $this->Zipcode = $Zipcode;
        return $this;
    }
}
