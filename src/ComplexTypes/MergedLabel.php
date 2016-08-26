<?php namespace DivideBV\Postnl\ComplexTypes;

class MergedLabel extends BaseType
{

    /**
     * @var string[] $Barcodes
     */
    protected $Barcodes = null;

    /**
     * @var ArrayOfLabel $Labels
     */
    protected $Labels = null;

    /**
     * @var string[] $Barcodes
     * @var ArrayOfLabel $Labels
     */
    public function __construct(array $Barcodes, ArrayOfLabel $Labels)
    {
        $this->setBarcodes($Barcodes);
        $this->setLabels($Labels);
    }

    /**
     * @return string[]
     */
    public function getBarcodes()
    {
        return $this->Barcodes;
    }

    /**
     * @param string[] $Barcodes
     * @return MergedLabel
     */
    public function setBarcodes($Barcodes)
    {
        $this->Barcodes = $Barcodes;
        return $this;
    }

    /**
     * @return ArrayOfLabel
     */
    public function getLabels()
    {
        return $this->Labels;
    }

    /**
     * @param ArrayOfLabel $Labels
     * @return MergedLabel
     */
    public function setLabels($Labels)
    {
        $this->Labels = $Labels;
        return $this;
    }
}
