<?php namespace DivideBV\Postnl\ComplexTypes;

class ResponseCustomer extends BaseType
{

    /**
     * @var string $CustomerCode
     */
    protected $CustomerCode = null;

    /**
     * @var string $CustomerNumber
     */
    protected $CustomerNumber = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @param string $CustomerCode
     * @param string $CustomerNumber
     * @param string $Name
     */
    public function __construct($CustomerCode, $CustomerNumber, $Name)
    {
        $this->setCustomerCode($CustomerCode);
        $this->setCustomerNumber($CustomerNumber);
        $this->setName($Name);
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
     * @return ResponseCustomer
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
     * @return ResponseCustomer
     */
    public function setCustomerNumber($CustomerNumber)
    {
        $this->CustomerNumber = $CustomerNumber;
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
     * @return ResponseCustomer
     */
    public function setName($Name)
    {
        $this->Name = $Name;
        return $this;
    }
}
