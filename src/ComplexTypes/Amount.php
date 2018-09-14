<?php namespace DivideBV\Postnl\ComplexTypes;

class Amount extends BaseType
{

    /**
     * @var string
     */
    protected $AccountName = null;

    /**
     * @var string
     */
    protected $AmountType = null;

    /**
     * @var string
     */
    protected $BIC = null;

    /**
     * @var string
     */
    protected $Currency = null;

    /**
     * @var string
     */
    protected $IBAN = null;

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
     * @param string $AmountType
     * @param string $BIC
     * @param string $Currency
     * @param string $IBAN
     * @param string $Reference
     * @param string $TransactionNumber
     * @param string $Value
     */
    public function __construct(
        $AccountName,
        $AmountType,
        $BIC,
        $Currency,
        $IBAN,
        $Reference,
        $TransactionNumber,
        $Value
    ) {
        $this->setAccountName($AccountName);
        $this->setAmountType($AmountType);
        $this->setBIC($BIC);
        $this->setCurrency($Currency);
        $this->setIBAN($IBAN);
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
     * @return Amount
     */
    public function setAccountName($AccountName)
    {
        $this->AccountName = $AccountName;
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
     * @return Amount
     */
    public function setAmountType($AmountType)
    {
        $this->AmountType = $AmountType;
        return $this;
    }

    /**
     * @return string
     */
    public function getBIC()
    {
        return $this->BIC;
    }

    /**
     * @param string $BIC
     * @return Amount
     */
    public function setBIC($BIC)
    {
        $this->BIC = $BIC;
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
     * @return Amount
     */
    public function setCurrency($Currency)
    {
        $this->Currency = $Currency;
        return $this;
    }

    /**
     * @return string
     */
    public function getIBAN()
    {
        return $this->IBAN;
    }

    /**
     * @param string $IBAN
     * @return Amount
     */
    public function setIBAN($IBAN)
    {
        $this->IBAN = $IBAN;
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
     * @return Amount
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
     * @return Amount
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
     * @return Amount
     */
    public function setValue($Value)
    {
        $this->Value = $Value;
        return $this;
    }
}
