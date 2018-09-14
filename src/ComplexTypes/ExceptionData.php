<?php namespace DivideBV\Postnl\ComplexTypes;

class ExceptionData extends BaseType
{

    /**
     * @var string
     */
    protected $Description = null;

    /**
     * @var string
     */
    protected $ErrorMsg = null;

    /**
     * @var string
     */
    protected $ErrorNumber = null;

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * @param string $Description
     * @return ExceptionData
     */
    public function setDescription($Description)
    {
        $this->Description = $Description;
        return $this;
    }

    /**
     * @return string
     */
    public function getErrorMsg()
    {
        return $this->ErrorMsg;
    }

    /**
     * @param string $ErrorMsg
     * @return ExceptionData
     */
    public function setErrorMsg($ErrorMsg)
    {
        $this->ErrorMsg = $ErrorMsg;
        return $this;
    }

    /**
     * @return string
     */
    public function getErrorNumber()
    {
        return $this->ErrorNumber;
    }

    /**
     * @param string $ErrorNumber
     * @return ExceptionData
     */
    public function setErrorNumber($ErrorNumber)
    {
        $this->ErrorNumber = $ErrorNumber;
        return $this;
    }
}
