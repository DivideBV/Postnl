<?php namespace DivideBV\Postnl\ComplexTypes;

class Address
{

    /**
     * @var string $AddressType
     */
    protected $AddressType = null;

    /**
     * @var string $Area
     */
    protected $Area = null;

    /**
     * @var string $Buildingname
     */
    protected $Buildingname = null;

    /**
     * @var string $City
     */
    protected $City = null;

    /**
     * @var string $CompanyName
     */
    protected $CompanyName = null;

    /**
     * @var string $Countrycode
     */
    protected $Countrycode = null;

    /**
     * @var string $Department
     */
    protected $Department = null;

    /**
     * @var string $Doorcode
     */
    protected $Doorcode = null;

    /**
     * @var string $FirstName
     */
    protected $FirstName = null;

    /**
     * @var string $Floor
     */
    protected $Floor = null;

    /**
     * @var string $HouseNr
     */
    protected $HouseNr = null;

    /**
     * @var string $HouseNrExt
     */
    protected $HouseNrExt = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $Region
     */
    protected $Region = null;

    /**
     * @var string $Remark
     */
    protected $Remark = null;

    /**
     * @var string $Street
     */
    protected $Street = null;

    /**
     * @var string $StreetHouseNrExt
     */
    protected $StreetHouseNrExt = null;

    /**
     * @var string $Zipcode
     */
    protected $Zipcode = null;

    /**
     * @param string $AddressType
     * @param string $Area
     * @param string $Buildingname
     * @param string $City
     * @param string $CompanyName
     * @param string $Countrycode
     * @param string $Department
     * @param string $Doorcode
     * @param string $FirstName
     * @param string $Floor
     * @param string $HouseNr
     * @param string $HouseNrExt
     * @param string $Name
     * @param string $Region
     * @param string $Remark
     * @param string $Street
     * @param string $StreetHouseNrExt
     * @param string $Zipcode
     */
    public function __construct(
        $AddressType,
        $Area,
        $Buildingname,
        $City,
        $CompanyName,
        $Countrycode,
        $Department,
        $Doorcode,
        $FirstName,
        $Floor,
        $HouseNr,
        $HouseNrExt,
        $Name,
        $Region,
        $Remark,
        $Street,
        $StreetHouseNrExt,
        $Zipcode
    ) {
        $this->setAddressType($AddressType);
        $this->setArea($Area);
        $this->setBuildingname($Buildingname);
        $this->setCity($City);
        $this->setCompanyName($CompanyName);
        $this->setCountrycode($Countrycode);
        $this->setDepartment($Department);
        $this->setDoorcode($Doorcode);
        $this->setFirstName($FirstName);
        $this->setFloor($Floor);
        $this->setHouseNr($HouseNr);
        $this->setHouseNrExt($HouseNrExt);
        $this->setName($Name);
        $this->setRegion($Region);
        $this->setRemark($Remark);
        $this->setStreet($Street);
        $this->setStreetHouseNrExt($StreetHouseNrExt);
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
     * @return Address
     */
    public function setAddressType($AddressType)
    {
        $this->AddressType = $AddressType;
        return $this;
    }

    /**
     * @return string
     */
    public function getArea()
    {
        return $this->Area;
    }

    /**
     * @param string $Area
     * @return Address
     */
    public function setArea($Area)
    {
        $this->Area = $Area;
        return $this;
    }

    /**
     * @return string
     */
    public function getBuildingname()
    {
        return $this->Buildingname;
    }

    /**
     * @param string $Buildingname
     * @return Address
     */
    public function setBuildingname($Buildingname)
    {
        $this->Buildingname = $Buildingname;
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
     * @return Address
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
     * @return Address
     */
    public function setCompanyName($CompanyName)
    {
        $this->CompanyName = $CompanyName;
        return $this;
    }

    /**
     * @return string
     */
    public function getCountrycode()
    {
        return $this->Countrycode;
    }

    /**
     * @param string $Countrycode
     * @return Address
     */
    public function setCountrycode($Countrycode)
    {
        $this->Countrycode = $Countrycode;
        return $this;
    }

    /**
     * @return string
     */
    public function getDepartment()
    {
        return $this->Department;
    }

    /**
     * @param string $Department
     * @return Address
     */
    public function setDepartment($Department)
    {
        $this->Department = $Department;
        return $this;
    }

    /**
     * @return string
     */
    public function getDoorcode()
    {
        return $this->Doorcode;
    }

    /**
     * @param string $Doorcode
     * @return Address
     */
    public function setDoorcode($Doorcode)
    {
        $this->Doorcode = $Doorcode;
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
     * @return Address
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
     * @return Address
     */
    public function setFloor($Floor)
    {
        $this->Floor = $Floor;
        return $this;
    }

    /**
     * @return string
     */
    public function getHouseNr()
    {
        return $this->HouseNr;
    }

    /**
     * @param string $HouseNr
     * @return Address
     */
    public function setHouseNr($HouseNr)
    {
        $this->HouseNr = $HouseNr;
        return $this;
    }

    /**
     * @return string
     */
    public function getHouseNrExt()
    {
        return $this->HouseNrExt;
    }

    /**
     * @param string $HouseNrExt
     * @return Address
     */
    public function setHouseNrExt($HouseNrExt)
    {
        $this->HouseNrExt = $HouseNrExt;
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
     * @return Address
     */
    public function setName($Name)
    {
        $this->Name = $Name;
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
     * @return Address
     */
    public function setRegion($Region)
    {
        $this->Region = $Region;
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
     * @return Address
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
     * @return Address
     */
    public function setStreet($Street)
    {
        $this->Street = $Street;
        return $this;
    }

    /**
     * @return string
     */
    public function getStreetHouseNrExt()
    {
        return $this->StreetHouseNrExt;
    }

    /**
     * @param string $StreetHouseNrExt
     * @return Address
     */
    public function setStreetHouseNrExt($StreetHouseNrExt)
    {
        $this->StreetHouseNrExt = $StreetHouseNrExt;
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
     * @return Address
     */
    public function setZipcode($Zipcode)
    {
        $this->Zipcode = $Zipcode;
        return $this;
    }
}
