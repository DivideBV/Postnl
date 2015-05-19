<?php namespace DivideBV\Postnl\ComplexTypes;

class ArrayOfAddress
{

    /**
     * @var Address[] $Address
     */
    protected $Address = null;

    /**
     * @param Address[] $Address
     */
    public function __construct(array $Address)
    {
        $this->setAddress($Address);
    }

    /**
     * @return Address[]
     */
    public function getAddress()
    {
        return $this->Address;
    }

    /**
     * @param Address[] $Address
     * @return ArrayOfAddress
     */
    public function setAddress(array $Address)
    {
        $this->Address = $Address;
        return $this;
    }
}
