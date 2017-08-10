<?php namespace DivideBV\Postnl\ComplexTypes;

class Address extends BaseType
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
     * @param string $FirstName
     * @param string $Name
     * @param string $CompanyName
     * @param string $Street
     * @param string $HouseNr
     * @param string $HouseNrExt
     * @param string $Zipcode
     * @param string $City
     * @param string $Countrycode
     * @param string $Area
     *     Optional.
     * @param string $Buildingname
     *     Optional.
     * @param string $Department
     *     Optional.
     * @param string $Doorcode
     *     Optional.
     * @param string $Floor
     *     Optional.
     * @param string $Region
     *     Optional.
     * @param string $Remark
     *     Optional.
     */
    public function __construct(
        $AddressType,
        $FirstName,
        $Name,
        $CompanyName,
        $Street,
        $HouseNr,
        $HouseNrExt,
        $Zipcode,
        $City,
        $Countrycode,
        $Area = null,
        $Buildingname = null,
        $Department = null,
        $Doorcode = null,
        $Floor = null,
        $Region = null,
        $Remark = null
    ) {
        $this->setAddressType($AddressType);
        $this->setFirstName($FirstName);
        $this->setName($Name);
        $this->setCompanyName($CompanyName);
        $this->setStreet($Street);
        $this->setHouseNr($HouseNr);
        $this->setHouseNrExt($HouseNrExt);
        $this->setZipcode($Zipcode);
        $this->setCity($City);
        $this->setCountrycode($Countrycode);

        // Optional parameters.
        $this->setArea($Area);
        $this->setBuildingname($Buildingname);
        $this->setDepartment($Department);
        $this->setDoorcode($Doorcode);
        $this->setFloor($Floor);
        $this->setRegion($Region);
        $this->setRemark($Remark);
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
    public function getStreetHouseNrExt()
    {
        return $this->StreetHouseNrExt;
    }

    /**
     * Combination of Street, HouseNr and HouseNrExt.
     *
     * The PostNL webservice will calculate a split of street name, house number and extension for you, and will
     * afterwards use the split values. This might result in incorrect behavior for which PostNL can’t be held liable.
     *
     * Important:
     * - The conversion is only made for NL, BE and DE addresses.
     * - Use separate fields (street, houseNr and extension) when possible.
     *
     * @param string $streetHouseNrExt
     * @return Address
     */
    public function setStreetHouseNrExt($streetHouseNrExt)
    {
        $this->StreetHouseNrExt = $streetHouseNrExt;
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
}
