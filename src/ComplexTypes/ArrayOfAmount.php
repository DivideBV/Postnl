<?php namespace DivideBV\Postnl\ComplexTypes;

class ArrayOfAmount extends BaseType
{

    /**
     * @var Amount[] $Amount
     */
    protected $Amount = null;

    /**
     * @param Amount[] $Amount
     */
    public function __construct(array $Amount)
    {
        $this->setAmount($Amount);
    }

    /**
     * @return Amount[]
     */
    public function getAmount()
    {
        return $this->Amount;
    }

    /**
     * @param Amount[] $Amount
     * @return ArrayOfAmount
     */
    public function setAmount(array $Amount)
    {
        $this->Amount = $Amount;
        return $this;
    }
}
