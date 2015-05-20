<?php namespace DivideBV\Postnl\ComplexTypes;

class ArrayOfLabel
{

    /**
     * @var Label[] $Label
     */
    protected $Label = null;

    /**
     * @param Label[] $Label
     */
    public function __construct(array $Label)
    {
        $this->setLabel($Label);
    }

    /**
     * @return Label[]
     */
    public function getLabel()
    {
        return $this->Label;
    }

    /**
     * @param Label[] $Label
     * @return ArrayOfLabel
     */
    public function setLabel(array $Label)
    {
        $this->Label = $Label;
        return $this;
    }
}
