<?php namespace DivideBV\Postnl\ComplexTypes;

class ArrayOfResponseAddress extends BaseArrayOfType
{

    /**
     * @var string The name of the array property this class is a wrapper of.
     */
    const WRAPPED_PROPERTY = 'ResponseAddress';

    /**
     * @var ResponseAddress[]
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
