<?php namespace DivideBV\Postnl\ComplexTypes;

use DateTime;

class CurrentStatusResponseShipment extends BaseType
{

    /**
     * @var ArrayOfResponseAddress
     */
    protected $Addresses = null;

    /**
     * @var ArrayOfResponseAmount
     */
    protected $Amounts = null;

    /**
     * @var string
     */
    protected $Barcode = null;

    /**
     * @var DateTime
     */
    protected $DeliveryDate = null;

    /**
     * @var ResponseDimension
     */
    protected $Dimension = null;

    /**
     * @var ResponseExpectation
     */
    protected $Expectation = null;

    /**
     * @var ArrayOfResponseGroup
     */
    protected $Groups = null;

    /**
     * @var string
     */
    protected $ProductCode = null;

    /**
     * @var ArrayOfResponseProductOption
     */
    protected $ProductOptions = null;

    /**
     * @var string
     */
    protected $Reference = null;

    /**
     * @var ResponseStatus
     */
    protected $Status = null;

    /**
     * @var ArrayOfWarning
     */
    protected $Warnings = null;

    /**
     * @param ArrayOfResponseAddress $Addresses
     * @param ArrayOfResponseAmount $Amounts
     * @param string $Barcode
     * @param DateTime $DeliveryDate
     * @param ResponseDimension $Dimension
     * @param ResponseExpectation $Expectation
     * @param ArrayOfResponseGroup $Groups
     * @param string $ProductCode
     * @param ArrayOfResponseProductOption $ProductOptions
     * @param string $Reference
     * @param ResponseStatus $Status
     * @param ArrayOfWarning $Warnings
     */
    public function __construct(
        ArrayOfResponseAddress $Addresses,
        ArrayOfResponseAmount $Amounts,
        $Barcode,
        DateTime $DeliveryDate,
        ResponseDimension $Dimension,
        ResponseExpectation $Expectation,
        ArrayOfResponseGroup $Groups,
        $ProductCode,
        ArrayOfResponseProductOption $ProductOptions,
        $Reference,
        ResponseStatus $Status,
        ArrayOfWarning $Warnings
    ) {
        $this->setAddresses($Addresses);
        $this->setAmounts($Amounts);
        $this->setBarcode($Barcode);
        $this->setDeliveryDate($DeliveryDate);
        $this->setDimension($Dimension);
        $this->setExpectation($Expectation);
        $this->setGroups($Groups);
        $this->setProductCode($ProductCode);
        $this->setProductOptions($ProductOptions);
        $this->setReference($Reference);
        $this->setStatus($Status);
        $this->setWarnings($Warnings);
    }

    /**
     * @return ArrayOfResponseAddress
     */
    public function getAddresses()
    {
        return $this->Addresses;
    }

    /**
     * @param ArrayOfResponseAddress $Addresses
     * @return CurrentStatusResponseShipment
     */
    public function setAddresses($Addresses)
    {
        $this->Addresses = $Addresses;
        return $this;
    }

    /**
     * @return ArrayOfResponseAmount
     */
    public function getAmounts()
    {
        return $this->Amounts;
    }

    /**
     * @param ArrayOfResponseAmount $Amounts
     * @return CurrentStatusResponseShipment
     */
    public function setAmounts($Amounts)
    {
        $this->Amounts = $Amounts;
        return $this;
    }

    /**
     * @return string
     */
    public function getBarcode()
    {
        return $this->Barcode;
    }

    /**
     * @param string $Barcode
     * @return CurrentStatusResponseShipment
     */
    public function setBarcode($Barcode)
    {
        $this->Barcode = $Barcode;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getDeliveryDate()
    {
        return $this->DeliveryDate;
    }

    /**
     * @param DateTime $DeliveryDate
     * @return CurrentStatusResponseShipment
     */
    public function setDeliveryDate(DateTime $DeliveryDate)
    {
        $this->DeliveryDate;
        return $this;
    }

    /**
     * @return ResponseDimension
     */
    public function getDimension()
    {
        return $this->Dimension;
    }

    /**
     * @param ResponseDimension $Dimension
     * @return CurrentStatusResponseShipment
     */
    public function setDimension($Dimension)
    {
        $this->Dimension = $Dimension;
        return $this;
    }

    /**
     * @return ResponseExpectation
     */
    public function getExpectation()
    {
        return $this->Expectation;
    }

    /**
     * @param ResponseExpectation $Expectation
     * @return CurrentStatusResponseShipment
     */
    public function setExpectation($Expectation)
    {
        $this->Expectation = $Expectation;
        return $this;
    }

    /**
     * @return ArrayOfResponseGroup
     */
    public function getGroups()
    {
        return $this->Groups;
    }

    /**
     * @param ArrayOfResponseGroup $Groups
     * @return CurrentStatusResponseShipment
     */
    public function setGroups($Groups)
    {
        $this->Groups = $Groups;
        return $this;
    }

    /**
     * @return string
     */
    public function getProductCode()
    {
        return $this->ProductCode;
    }

    /**
     * @param string $ProductCode
     * @return CurrentStatusResponseShipment
     */
    public function setProductCode($ProductCode)
    {
        $this->ProductCode = $ProductCode;
        return $this;
    }

    /**
     * @return ArrayOfResponseProductOption
     */
    public function getProductOptions()
    {
        return $this->ProductOptions;
    }

    /**
     * @param ArrayOfResponseProductOption $ProductOptions
     * @return CurrentStatusResponseShipment
     */
    public function setProductOptions($ProductOptions)
    {
        $this->ProductOptions = $ProductOptions;
        return $this;
    }

    /**
     * @return string
     */
    public function getReference()
    {
        return $this->Reference;
    }

    /**
     * @param string $Reference
     * @return CurrentStatusResponseShipment
     */
    public function setReference($Reference)
    {
        $this->Reference = $Reference;
        return $this;
    }

    /**
     * @return ResponseStatus
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * @param ResponseStatus $Status
     * @return CurrentStatusResponseShipment
     */
    public function setStatus($Status)
    {
        $this->Status = $Status;
        return $this;
    }

    /**
     * @return ArrayOfWarning
     */
    public function getWarnings()
    {
        return $this->Warnings;
    }

    /**
     * @param ArrayOfWarning $Warnings
     * @return CurrentStatusResponseShipment
     */
    public function setWarnings($Warnings)
    {
        $this->Warnings = $Warnings;
        return $this;
    }
}
