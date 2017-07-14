<?php namespace DivideBV\Postnl\ComplexTypes;

class GenerateReturnLabelResponse extends BaseType
{

    /**
     * @var ArrayOfLabel $Labels
     */
    protected $Labels = null;

    /**
     * @var ArrayOfWarning $Warnings
     */
    protected $Warnings = null;

    /**
     * @param ArrayOfLabel $Labels
     * @param ArrayOfWarning $Warnings
     */
    public function __construct(ArrayOfLabel $Labels = null, ArrayOfWarning $Warnings = null ) 
    {
        $this->setLabels($Labels);
        $this->setWarnings($Warnings);
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
     * @return GenerateReturnLabelResponse
     */
    public function setLabels($Labels)
    {
        $this->Labels = $Labels;
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
     * @return GenerateReturnLabelResponse
     */
    public function setWarnings($Warnings)
    {
        $this->Warnings = $Warnings;
        return $this;
    }
}
