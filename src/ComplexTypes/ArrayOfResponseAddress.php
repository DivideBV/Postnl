<?php namespace DivideBV\Postnl\ComplexTypes;

class ArrayOfResponseAddress extends BaseType
{

    /**
     * @var ResponseAddress[] $ResponseAddress
     */
    protected $ResponseAddress = null;

    /**
     * @param ResponseAddress[] $ResponseAddress
     */
    public function __construct(array $ResponseAddress)
    {
        $this->setResponseAddress($ResponseAddress);
    }

    /**
     * @return ResponseAddress[]
     */
    public function getResponseAddress()
    {
        return $this->ResponseAddress;
    }

    /**
     * @param ResponseAddress[] $ResponseAddress
     * @return ArrayOfResponseAddress
     */
    public function setResponseAddress(array $ResponseAddress)
    {
        $this->ResponseAddress = $ResponseAddress;
        return $this;
    }
}
