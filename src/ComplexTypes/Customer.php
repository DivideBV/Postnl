<?php namespace DivideBV\Postnl\ComplexTypes;

class Customer extends BaseType
{

    /**
     * @var string
     */
    protected $CustomerNumber = null;

    /**
     * @var string
     */
    protected $CustomerCode = null;

    /**
     * @var string
     */
    protected $CollectionLocation = null;

    /**
     * @var string
     */
    protected $ContactPerson = null;

    /**
     * @var string
     */
    protected $Email = null;

    /**
     * @var string
     */
    protected $Name = null;

    /**
     * @var Address
     */
    protected $Address = null;

    /**
     * @param string $CustomerNumber
     * @param string $CustomerCode
     * @param string $CollectionLocation
     * @param string $ContactPerson
     * @param string $Email
     * @param string $Name
     * @param Address|null $Address
     */
    public function __construct(
        $CustomerNumber,
        $CustomerCode,
        $CollectionLocation,
        $ContactPerson = null,
        $Email = null,
        $Name = null,
        Address $Address = null
    ) {
        $this->setCustomerNumber($CustomerNumber);
        $this->setCustomerCode($CustomerCode);
        $this->setCollectionLocation($CollectionLocation);
        $this->setContactPerson($ContactPerson);
        $this->setEmail($Email);
        $this->setName($Name);
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
