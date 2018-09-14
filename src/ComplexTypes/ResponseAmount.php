<?php namespace DivideBV\Postnl\ComplexTypes;

class ResponseAmount extends BaseType
{

    /**
     * @var string
     */
    protected $AccountName = null;

    /**
     * @var string
     */
    protected $AccountNr = null;

    /**
     * @var string
     */
    protected $AmountType = null;

    /**
     * @var string
     */
    protected $Currency = null;

    /**
     * @var string
     */
    protected $Reference = null;

    /**
     * @var string
     */
    protected $TransactionNumber = null;

    /**
     * @var string
     */
    protected $Value = null;

    /**
     * @param string $AccountName
     * @param string $AccountNr
     * @param string $AmountType
     * @param string $Currency
     * @param string $Reference
     * @param string $TransactionNumber
     * @param string $Value
     */
    public function __construct(
        $AccountName,
        $AccountNr,
        $AmountType,
        $Currency,
        $Reference,
        $TransactionNumber,
        $Value
    ) {
        $this->setAccountName($AccountName);
        $this->setAccountNr($AccountNr);
        $this->setAmountType($AmountType);
        $this->setCurrency($Currency);
        $this->setReference($Reference);
        $this->setTransactionNumber($TransactionNumber);
        $this->setValue($Value);
    }

    /**
     * @return string
     */
    public function getAccountName()
    {
        return $this->AccountName;
    }

    /**
     * @param string $AccountName
     * @return ResponseAmount
     */
    public function setAccountName($AccountName)
    {
        $this->AccountName = $AccountName;
        return $this;
    }

    /**
     * @return string
     */
    public function getAccountNr()
    {
        return $this->AccountNr;
    }

    /**
     * @param string $AccountNr
     * @return ResponseAmount
     */
    public function setAccountNr($AccountNr)
    {
        $this->AccountNr = $AccountNr;
        return $this;
    }

    /**
     * @return string
     */
    public function getAmountType()
    {
        return $this->AmountType;
    }

    /**
     * @param string $AmountType
     * @return ResponseAmount
     */
    public function setAmountType($AmountType)
    {
        $this->AmountType = $AmountType;
        return $this;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
        return $this->Currency;
    }

    /**
     * @param string $Currency
     * @return ResponseAmount
     */
    public function setCurrency($Currency)
    {
        $this->Currency = $Currency;
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
     * @return ResponseAmount
     */
    public function setReference($Reference)
    {
        $this->Reference = $Reference;
        return $this;
    }

    /**
     * @return string
     */
    public function getTransactionNumber()
    {
        return $this->TransactionNumber;
    }

    /**
     * @param string $TransactionNumber
     * @return ResponseAmount
     */
    public function setTransactionNumber($TransactionNumber)
    {
        $this->TransactionNumber = $TransactionNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->Value;
    }

    /**
     * @param string $Value
     * @return ResponseAmount
     */
    public function setValue($Value)
    {
        $this->Value = $Value;
        return $this;
    }
}
