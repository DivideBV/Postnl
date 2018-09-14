<?php namespace DivideBV\Postnl\ComplexTypes;

use DateTime;

class CompleteStatusResponseShipment extends BaseType
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
     * @var ResponseCustomer
     */
    protected $Customer = null;

    /**
     * @var DateTime
     */
    protected $DeliveryDate = null;

    /**
     * @var ResponseDimension
     */
    protected $Dimension = null;

    /**
     * @var ArrayOfCompleteStatusResponseEvent
     */
    protected $Events = null;

    /**
     * @var ResponseExpectation
     */
    protected $Expectation = null;

    /**
     * @var ArrayOfResponseGroup
     */
    protected $Groups = null;

    /**
     * @var ArrayOfCompleteStatusResponseOldStatus
     */
    protected $OldStatuses = null;

    /**
     * @var string
     */
    protected $ProductCode = null;

    /**
     * @var string
     */
    protected $ProductDescription = null;

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
     * @param ResponseCustomer $Customer
     * @param DateTime $DeliveryDate
     * @param ResponseDimension $Dimension
     * @param ArrayOfCompleteStatusResponseEvent $Events
     * @param ResponseExpectation $Expectation
     * @param ArrayOfResponseGroup $Groups
     * @param ArrayOfCompleteStatusResponseOldStatus $OldStatuses
     * @param string $ProductCode
     * @param string $ProductDescription
     * @param ArrayOfResponseProductOption $ProductOptions
     * @param string $Reference
     * @param ResponseStatus $Status
     * @param ArrayOfWarning $Warnings
     */
    public function __construct(
        ArrayOfResponseAddress $Addresses,
        ArrayOfResponseAmount $Amounts,
        $Barcode,
        ResponseCustomer $Customer,
        DateTime $DeliveryDate,
        ResponseDimension $Dimension,
        ArrayOfCompleteStatusResponseEvent $Events,
        ResponseExpectation $Expectation,
        ArrayOfResponseGroup $Groups,
        ArrayOfCompleteStatusResponseOldStatus $OldStatuses,
        $ProductCode,
        $ProductDescription,
        ArrayOfResponseProductOption $ProductOptions,
        $Reference,
        ResponseStatus $Status,
        ArrayOfWarning $Warnings
    ) {
        $this->setAddresses($Addresses);
        $this->setAmounts($Amounts);
        $this->setBarcode($Barcode);
        $this->setCustomer($Customer);
        $this->setDeliveryDate($DeliveryDate);
        $this->setDimension($Dimension);
        $this->setEvents($Events);
        $this->setExpectation($Expectation);
        $this->setGroups($Groups);
        $this->setOldStatuses($OldStatuses);
        $this->setProductCode($ProductCode);
        $this->setProductDescription($ProductDescription);
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
     * @return CompleteStatusResponseShipment
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
     * @return CompleteStatusResponseShipment
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
     * @return CompleteStatusResponseShipment
     */
    public function setBarcode($Barcode)
    {
        $this->Barcode = $Barcode;
        return $this;
    }

    /**
     * @return ResponseCustomer
     */
    public function getCustomer()
    {
        return $this->Customer;
    }

    /**
     * @param ResponseCustomer $Customer
     * @return CompleteStatusResponseShipment
     */
    public function setCustomer($Customer)
    {
        $this->Customer = $Customer;
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
     * @return CompleteStatusResponseShipment
     */
    public function setDeliveryDate(DateTime $DeliveryDate)
    {
        $this->DeliveryDate = $DeliveryDate;
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
     * @return CompleteStatusResponseShipment
     */
    public function setDimension($Dimension)
    {
        $this->Dimension = $Dimension;
        return $this;
    }

    /**
     * @return ArrayOfCompleteStatusResponseEvent
     */
    public function getEvents()
    {
        return $this->Events;
    }

    /**
     * @param ArrayOfCompleteStatusResponseEvent $Events
     * @return CompleteStatusResponseShipment
     */
    public function setEvents($Events)
    {
        $this->Events = $Events;
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
     * @return CompleteStatusResponseShipment
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
     * @return CompleteStatusResponseShipment
     */
    public function setGroups($Groups)
    {
        $this->Groups = $Groups;
        return $this;
    }

    /**
     * @return ArrayOfCompleteStatusResponseOldStatus
     */
    public function getOldStatuses()
    {
        return $this->OldStatuses;
    }

    /**
     * @param ArrayOfCompleteStatusResponseOldStatus $OldStatuses
     * @return CompleteStatusResponseShipment
     */
    public function setOldStatuses($OldStatuses)
    {
        $this->OldStatuses = $OldStatuses;
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
     * @return CompleteStatusResponseShipment
     */
    public function setProductCode($ProductCode)
    {
        $this->ProductCode = $ProductCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getProductDescription()
    {
        return $this->ProductDescription;
    }

    /**
     * @param string $ProductDescription
     * @return CompleteStatusResponseShipment
     */
    public function setProductDescription($ProductDescription)
    {
        $this->ProductDescription = $ProductDescription;
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
     * @return CompleteStatusResponseShipment
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
     * @return CompleteStatusResponseShipment
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
     * @return CompleteStatusResponseShipment
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
     * @return CompleteStatusResponseShipment
     */
    public function setWarnings($Warnings)
    {
        $this->Warnings = $Warnings;
        return $this;
    }
}
