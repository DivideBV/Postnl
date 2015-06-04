<?php namespace DivideBV\Postnl\ComplexTypes;

class ArrayOfResponseProductOption extends BaseType
{

    /**
     * @var ResponseProductOption[] $ResponseProductOption
     */
    protected $ResponseProductOption = null;

    /**
     * @param ResponseProductOption[] $ResponseProductOption
     */
    public function __construct(array $ResponseProductOption)
    {
        $this->setResponseProductOption($ResponseProductOption);
    }

    /**
     * @return ResponseProductOption[]
     */
    public function getResponseProductOption()
    {
        return $this->ResponseProductOption;
    }

    /**
     * @param ResponseProductOption[] $ResponseProductOption
     * @return ArrayOfResponseProductOption
     */
    public function setResponseProductOption(array $ResponseProductOption)
    {
        $this->ResponseProductOption = $ResponseProductOption;
        return $this;
    }
}
