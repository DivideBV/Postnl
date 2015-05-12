<?php namespace DivideBV\Postnl\ComplexTypes;

class Customer
{

    /**
     * @var Address $Address
     */
    protected $Address = null;

    /**
     * @var string $CollectionLocation
     */
    protected $CollectionLocation = null;

    /**
     * @var string $ContactPerson
     */
    protected $ContactPerson = null;

    /**
     * @var string $CustomerCode
     */
    protected $CustomerCode = null;

    /**
     * @var string $CustomerNumber
     */
    protected $CustomerNumber = null;

    /**
     * @var string $Email
     */
    protected $Email = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @param Address $Address
     * @param string $CollectionLocation
     * @param string $ContactPerson
     * @param string $CustomerCode
     * @param string $CustomerNumber
     * @param string $Email
     * @param string $Name
     */
    public function __construct(
        Address $Address,
        $CollectionLocation,
        $ContactPerson,
        $CustomerCode,
        $CustomerNumber,
        $Email,
        $Name
    ) {
        $this->setAddress($Address);
        $this->setCollectionLocation($CollectionLocation);
        $this->setContactPerson($ContactPerson);
        $this->setCustomerCode($CustomerCode);
        $this->setCustomerNumber($CustomerNumber);
        $this->setEmail($Email);
        $this->setName($Name);
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
     * @return Customer
     */
    public function setAddress($Address)
    {
        $this->Address = $Address;
        return $this;
    }

    /**
     * @return string
     */
    public function getCollectionLocation()
    {
        return $this->CollectionLocation;
    }

    /**
     * @param string $CollectionLocation
     * @return Customer
     */
    public function setCollectionLocation($CollectionLocation)
    {
        $this->CollectionLocation = $CollectionLocation;
        return $this;
    }

    /**
     * @return string
     */
    public function getContactPerson()
    {
        return $this->ContactPerson;
    }

    /**
     * @param string $ContactPerson
     * @return Customer
     */
    public function setContactPerson($ContactPerson)
    {
        $this->ContactPerson = $ContactPerson;
        return $this;
    }

    /**
     * @return string
     */
    public function getCustomerCode()
    {
        return $this->CustomerCode;
    }

    /**
     * @param string $CustomerCode
     * @return Customer
     */
    public function setCustomerCode($CustomerCode)
    {
        $this->CustomerCode = $CustomerCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getCustomerNumber()
    {
        return $this->CustomerNumber;
    }

    /**
     * @param string $CustomerNumber
     * @return Customer
     */
    public function setCustomerNumber($CustomerNumber)
    {
        $this->CustomerNumber = $CustomerNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->Email;
    }

    /**
     * @param string $Email
     * @return Customer
     */
    public function setEmail($Email)
    {
        $this->Email = $Email;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param string $Name
     * @return Customer
     */
    public function setName($Name)
    {
        $this->Name = $Name;
        return $this;
    }
}
