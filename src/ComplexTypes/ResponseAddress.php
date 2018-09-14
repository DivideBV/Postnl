<?php namespace DivideBV\Postnl\ComplexTypes;

class ResponseAddress extends BaseType
{

    /**
     * @var string
     */
    protected $AddressType = null;

    /**
     * @var string
     */
    protected $Building = null;

    /**
     * @var string
     */
    protected $City = null;

    /**
     * @var string
     */
    protected $CompanyName = null;

    /**
     * @var string
     */
    protected $CountryCode = null;

    /**
     * @var string
     */
    protected $DepartmentName = null;

    /**
     * @var string
     */
    protected $District = null;

    /**
     * @var string
     */
    protected $DoorCode = null;

    /**
     * @var string
     */
    protected $FirstName = null;

    /**
     * @var string
     */
    protected $Floor = null;

    /**
     * @var string
     */
    protected $HouseNumber = null;

    /**
     * @var string
     */
    protected $HouseNumberSuffix = null;

    /**
     * @var string
     */
    protected $LastName = null;

    /**
     * @var string
     */
    protected $Region = null;

    /**
     * @var string
     */
    protected $RegistrationDate = null;

    /**
     * @var string
     */
    protected $Remark = null;

    /**
     * @var string
     */
    protected $Street = null;

    /**
     * @var string
     */
    protected $Zipcode = null;

    /**
     * @param string $AddressType
     * @param string $Building
     * @param string $City
     * @param string $CompanyName
     * @param string $CountryCode
     * @param string $DepartmentName
     * @param string $District
     * @param string $DoorCode
     * @param string $FirstName
     * @param string $Floor
     * @param string $HouseNumber
     * @param string $HouseNumberSuffix
     * @param string $LastName
     * @param string $Region
     * @param string $RegistrationDate
     * @param string $Remark
     * @param string $Street
     * @param string $Zipcode
     */
    public function __construct(
        $AddressType,
        $Building,
        $City,
        $CompanyName,
        $CountryCode,
        $DepartmentName,
        $District,
        $DoorCode,
        $FirstName,
        $Floor,
        $HouseNumber,
        $HouseNumberSuffix,
        $LastName,
        $Region,
        $RegistrationDate,
        $Remark,
        $Street,
        $Zipcode
    ) {
        $this->setAddressType($AddressType);
        $this->setBuilding($Building);
        $this->setCity($City);
        $this->setCompanyName($CompanyName);
        $this->setCountryCode($CountryCode);
        $this->setDepartmentName($DepartmentName);
        $this->setDistrict($District);
        $this->setDoorCode($DoorCode);
        $this->setFirstName($FirstName);
        $this->setFloor($Floor);
        $this->setHouseNumber($HouseNumber);
        $this->setHouseNumberSuffix($HouseNumberSuffix);
        $this->setLastName($LastName);
        $this->setRegion($Region);
        $this->setRegistrationDate($RegistrationDate);
        $this->setRemark($Remark);
        $this->setStreet($Street);
        $this->setZipcode($Zipcode);
    }

    /**
     * @return string
     */
    public function getAddressType()
    {
        return $this->AddressType;
    }

    /**
     * @param string $AddressType
     * @return ResponseAddress
     */
    public function setAddressType($AddressType)
    {
        $this->AddressType = $AddressType;
        return $this;
    }

    /**
     * @return string
     */
    public function getBuilding()
    {
        return $this->Building;
    }

    /**
     * @param string $Building
     * @return ResponseAddress
     */
    public function setBuilding($Building)
    {
        $this->Building = $Building;
        return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->City;
    }

    /**
     * @param string $City
     * @return ResponseAddress
     */
    public function setCity($City)
    {
        $this->City = $City;
        return $this;
    }

    /**
     * @return string
     */
    public function getCompanyName()
    {
        return $this->CompanyName;
    }

    /**
     * @param string $CompanyName
     * @return ResponseAddress
     */
    public function setCompanyName($CompanyName)
    {
        $this->CompanyName = $CompanyName;
        return $this;
    }

    /**
     * @return string
     */
    public function getCountryCode()
    {
        return $this->CountryCode;
    }

    /**
     * @param string $CountryCode
     * @return ResponseAddress
     */
    public function setCountryCode($CountryCode)
    {
        $this->CountryCode = $CountryCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getDepartmentName()
    {
        return $this->DepartmentName;
    }

    /**
     * @param string $DepartmentName
     * @return ResponseAddress
     */
    public function setDepartmentName($DepartmentName)
    {
        $this->DepartmentName = $DepartmentName;
        return $this;
    }

    /**
     * @return string
     */
    public function getDistrict()
    {
        return $this->District;
    }

    /**
     * @param string $District
     * @return ResponseAddress
     */
    public function setDistrict($District)
    {
        $this->District = $District;
        return $this;
    }

    /**
     * @return string
     */
    public function getDoorCode()
    {
        return $this->DoorCode;
    }

    /**
     * @param string $DoorCode
     * @return ResponseAddress
     */
    public function setDoorCode($DoorCode)
    {
        $this->DoorCode = $DoorCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->FirstName;
    }

    /**
     * @param string $FirstName
     * @return ResponseAddress
     */
    public function setFirstName($FirstName)
    {
        $this->FirstName = $FirstName;
        return $this;
    }

    /**
     * @return string
     */
    public function getFloor()
    {
        return $this->Floor;
    }

    /**
     * @param string $Floor
     * @return ResponseAddress
     */
    public function setFloor($Floor)
    {
        $this->Floor = $Floor;
        return $this;
    }

    /**
     * @return string
     */
    public function getHouseNumber()
    {
        return $this->HouseNumber;
    }

    /**
     * @param string $HouseNumber
     * @return ResponseAddress
     */
    public function setHouseNumber($HouseNumber)
    {
        $this->HouseNumber = $HouseNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getHouseNumberSuffix()
    {
        return $this->HouseNumberSuffix;
    }

    /**
     * @param string $HouseNumberSuffix
     * @return ResponseAddress
     */
    public function setHouseNumberSuffix($HouseNumberSuffix)
    {
        $this->HouseNumberSuffix = $HouseNumberSuffix;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->LastName;
    }

    /**
     * @param string $LastName
     * @return ResponseAddress
     */
    public function setLastName($LastName)
    {
        $this->LastName = $LastName;
        return $this;
    }

    /**
     * @return string
     */
    public function getRegion()
    {
        return $this->Region;
    }

    /**
     * @param string $Region
     * @return ResponseAddress
     */
    public function setRegion($Region)
    {
        $this->Region = $Region;
        return $this;
    }

    /**
     * @return string
     */
    public function getRegistrationDate()
    {
        return $this->RegistrationDate;
    }

    /**
     * @param string $RegistrationDate
     * @return ResponseAddress
     */
    public function setRegistrationDate($RegistrationDate)
    {
        $this->RegistrationDate = $RegistrationDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getRemark()
    {
        return $this->Remark;
    }

    /**
     * @param string $Remark
     * @return ResponseAddress
     */
    public function setRemark($Remark)
    {
        $this->Remark = $Remark;
        return $this;
    }

    /**
     * @return string
     */
    public function getStreet()
    {
        return $this->Street;
    }

    /**
     * @param string $Street
     * @return ResponseAddress
     */
    public function setStreet($Street)
    {
        $this->Street = $Street;
        return $this;
    }

    /**
     * @return string
     */
    public function getZipcode()
    {
        return $this->Zipcode;
    }

    /**
     * @param string $Zipcode
     * @return ResponseAddress
     */
    public function setZipcode($Zipcode)
    {
        $this->Zipcode = $Zipcode;
        return $this;
    }
}
