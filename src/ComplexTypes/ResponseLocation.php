<?php namespace DivideBV\Postnl\ComplexTypes;

class ResponseLocation extends BaseType
{

    /**
     * @var Address
     */
    protected $Address = null;

    /**
     * @var string[]
     */
    protected $DeliveryOptions = null;

    /**
     * @var string
     */
    protected $Distance = null;

    /**
     * @var string
     */
    protected $Latitude = null;

    /**
     * @var string
     */
    protected $LocationCode = null;

    /**
     * @var string
     */
    protected $Longitude = null;

    /**
     * @var string
     */
    protected $Name = null;

    /**
     * @var OpeningHours
     */
    protected $OpeningHours = null;

    /**
     * @var string
     */
    protected $PartnerName = null;

    /**
     * @var string
     */
    protected $PhoneNumber = null;

    /**
     * @var string
     */
    protected $RetailFormulaName = null;

    /**
     * @var string
     */
    protected $RetailNetworkID = null;

    /**
     * @var string
     */
    protected $Saleschannel = null;

    /**
     * @var string
     */
    protected $TerminalType = null;

    /**
     * @param Address $Address
     * @param string[] $DeliveryOptions
     * @param string $Distance
     * @param string $Latitude
     * @param string $LocationCode
     * @param string $Longtitude
     * @param string $Name
     * @param OpeningHours $OpeningHours
     * @param string $PartnerName
     * @param string $PhoneNumber
     * @param string $RetailFormulaName
     * @param string $RetailNetworkID
     * @param string $Saleschannel
     * @param string $TerminalType
     */
    public function __construct(
        Address $Address,
        array $DeliveryOptions,
        $Distance,
        $Latitude,
        $LocationCode,
        $Longtitude,
        $Name,
        OpeningHours $OpeningHours,
        $PartnerName,
        $PhoneNumber,
        $RetailFormulaName,
        $RetailNetworkID,
        $Saleschannel,
        $TerminalType
    ) {
        $this->setAddress($Address);
        $this->setDeliveryOptions($DeliveryOptions);
        $this->setDistance($Distance);
        $this->setLatitude($Latitude);
        $this->setLocationCode($LocationCode);
        $this->setLongitude($Longtitude);
        $this->setName($Name);
        $this->setOpeningHours($OpeningHours);
        $this->setPartnerName($PartnerName);
        $this->setPhoneNumber($PhoneNumber);
        $this->setRetailFormulaName($RetailFormulaName);
        $this->setRetailNetworkID($RetailNetworkID);
        $this->setSaleschannel($Saleschannel);
        $this->setTerminalType($TerminalType);
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

    /**
     * @return string[]
     */
    public function getDeliveryOptions()
    {
        return $this->DeliveryOptions;
    }

    /**
     * @param string[] $DeliveryOptions
     * @return ResponseLocation
     */
    public function setDeliveryOptions($DeliveryOptions)
    {
        $this->DeliveryOptions = $DeliveryOptions;
        return $this;
    }

    /**
     * @return string
     */
    public function getDistance()
    {
        return $this->Distance;
    }

    /**
     * @param string $Distance
     * @return ResponseLocation
     */
    public function setDistance($Distance)
    {
        $this->Distance = $Distance;
        return $this;
    }

    /**
     * @return string
     */
    public function getLatitude()
    {
        return $this->Latitude;
    }

    /**
     * @param string $Latitude
     * @return ResponseLocation
     */
    public function setLatitude($Latitude)
    {
        $this->Latitude = $Latitude;
        return $this;
    }

    /**
     * @return string
     */
    public function getLocationCode()
    {
        return $this->LocationCode;
    }

    /**
     * @param string $LocationCode
     * @return ResponseLocation
     */
    public function setLocationCode($LocationCode)
    {
        $this->LocationCode = $LocationCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getLongitude()
    {
        return $this->Longitude;
    }

    /**
     * @param string $Longitude
     * @return ResponseLocation
     */
    public function setLongitude($Longitude)
    {
        $this->Longitude = $Longitude;
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
     * @return ResponseLocation
     */
    public function setName($Name)
    {
        $this->Name = $Name;
        return $this;
    }

    /**
     * @return OpeningHours
     */
    public function getOpeningHours()
    {
        return $this->OpeningHours;
    }

    /**
     * @param OpeningHours $OpeningHours
     * @return ResponseLocation
     */
    public function setOpeningHours($OpeningHours)
    {
        $this->OpeningHours = $OpeningHours;
        return $this;
    }

    /**
     * @return string
     */
    public function getPartnerName()
    {
        return $this->PartnerName;
    }

    /**
     * @param string $PartnerName
     * @return ResponseLocation
     */
    public function setPartnerName($PartnerName)
    {
        $this->PartnerName = $PartnerName;
        return $this;
    }

    /**
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->PhoneNumber;
    }

    /**
     * @param string $PhoneNumber
     * @return ResponseLocation
     */
    public function setPhoneNumber($PhoneNumber)
    {
        $this->PhoneNumber = $PhoneNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getRetailFormulaName()
    {
        return $this->RetailFormulaName;
    }

    /**
     * @param string $RetailFormulaName
     * @return ResponseLocation
     */
    public function setRetailFormulaName($RetailFormulaName)
    {
        $this->RetailFormulaName = $RetailFormulaName;
        return $this;
    }

    /**
     * @return string
     */
    public function getRetailNetworkID()
    {
        return $this->RetailNetworkID;
    }

    /**
     * @param string $RetailNetworkID
     * @return ResponseLocation
     */
    public function setRetailNetworkID($RetailNetworkID)
    {
        $this->RetailNetworkID = $RetailNetworkID;
        return $this;
    }

    /**
     * @return string
     */
    public function getSaleschannel()
    {
        return $this->Saleschannel;
    }

    /**
     * @param string $Saleschannel
     * @return ResponseLocation
     */
    public function setSaleschannel($Saleschannel)
    {
        $this->Saleschannel = $Saleschannel;
        return $this;
    }

    /**
     * @return string
     */
    public function getTerminalType()
    {
        return $this->TerminalType;
    }

    /**
     * @param string $TerminalType
     * @return ResponseLocation
     */
    public function setTerminalType($TerminalType)
    {
        $this->TerminalType = $TerminalType;
        return $this;
    }
}
