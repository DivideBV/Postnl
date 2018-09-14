<?php namespace DivideBV\Postnl\ComplexTypes;

/**
 * XML namespace: http://postnl.nl/cif/domain/BarcodeWebService/
 */
class Barcode extends BaseType
{

    /**
     * @var string
     */
    protected $Type = null;

    /**
     * @var string
     */
    protected $Range = null;

    /**
     * @var string
     */
    protected $Serie = null;

    /**
     * @param string $Type
     * @param string $Range
     * @param string $Serie
     */
    public function __construct($Type, $Range, $Serie)
    {
        $this->setType($Type);
        $this->setRange($Range);
        $this->setSerie($Serie);
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * @param string $Type
     * @return Barcode
     */
    public function setType($Type)
    {
        $this->Type = $Type;
        return $this;
    }

    /**
     * @return string
     */
    public function getRange()
    {
        return $this->Range;
    }

    /**
     * @param string $Range
     * @return Barcode
     */
    public function setRange($Range)
    {
        $this->Range = $Range;
        return $this;
    }

    /**
     * @return string
     */
    public function getSerie()
    {
        return $this->Serie;
    }

    /**
     * @param string $Serie
     * @return Barcode
     */
    public function setSerie($Serie)
    {
        $this->Serie = $Serie;
        return $this;
    }
}
