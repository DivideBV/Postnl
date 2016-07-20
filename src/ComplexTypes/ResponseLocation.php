<?php namespace DivideBV\Postnl\ComplexTypes;

class ResponseLocation extends BaseType
{

    /**
     * @var Address $Address
     */
    protected $Address = null;

    /**
     * @param Address $Address
     */
    public function __construct($Address)
    {
        $this->setAddress($Address);
    }

    /**
     * @return Address
     */
    public function getAddress()
    {
        return $this->Address;
    }

    /**
     * @param Address $Address
     * @return ResponseLocation
     */
    public function setAddress($Address)
    {
        $this->Address = $Address;
        return $this;
    }
}
