<?php namespace DivideBV\Postnl\ComplexTypes;

class ArrayOfProductOption
{

    /**
     * @var ProductOption[] $ProductOption
     */
    protected $ProductOption = null;

    /**
     * @param ProductOption[] $ProductOption
     */
    public function __construct(array $ProductOption)
    {
        $this->setProductOption($ProductOption);
    }

    /**
     * @return ProductOption[]
     */
    public function getProductOption()
    {
        return $this->ProductOption;
    }

    /**
     * @param ProductOption[] $ProductOption
     * @return ArrayOfProductOption
     */
    public function setProductOption(array $ProductOption)
    {
        $this->ProductOption = $ProductOption;
        return $this;
    }
}
