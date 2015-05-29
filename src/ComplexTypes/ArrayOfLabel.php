<?php namespace DivideBV\Postnl\ComplexTypes;

class ArrayOfLabel extends BaseType
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
        // When created by the SOAP stack, `$this->Label` may not be an array.
        return is_array($this->Label) ? $this->Label : [$this->Label];
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
