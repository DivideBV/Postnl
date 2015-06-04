<?php namespace DivideBV\Postnl\ComplexTypes;

class ArrayOfResponseAmount extends BaseType
{

    /**
     * @var ResponseAmount[] $ResponseAmount
     */
    protected $ResponseAmount = null;

    /**
     * @param ResponseAmount[] $ResponseAmount
     */
    public function __construct(array $ResponseAmount)
    {
        $this->setResponseAmount($ResponseAmount);
    }

    /**
     * @return ResponseAmount[]
     */
    public function getResponseAmount()
    {
        return $this->ResponseAmount;
    }

    /**
     * @param ResponseAmount[] $ResponseAmount
     * @return ArrayOfResponseAmount
     */
    public function setResponseAmount(array $ResponseAmount)
    {
        $this->ResponseAmount = $ResponseAmount;
        return $this;
    }
}
