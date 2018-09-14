<?php namespace DivideBV\Postnl\ComplexTypes;

class RequestCustomer extends BaseType
{

    /**
     * @var string
     */
    protected $CustomerCode = null;

    /**
     * @var string
     */
    protected $CustomerNumber = null;

    /**
     * @param string $CustomerCode
     * @param string $CustomerNumber
     */
    public function __construct($CustomerCode, $CustomerNumber)
    {
        $this->setCustomerCode($CustomerCode);
        $this->setCustomerNumber($CustomerNumber);
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
     * @return RequestCustomer
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
     * @return RequestCustomer
     */
    public function setCustomerNumber($CustomerNumber)
    {
        $this->CustomerNumber = $CustomerNumber;
        return $this;
    }
}
