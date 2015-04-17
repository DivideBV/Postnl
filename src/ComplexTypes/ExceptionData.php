<?php namespace DivideBV\Postnl\ComplexTypes;

class ExceptionData
{

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var string $ErrorMsg
     */
    protected $ErrorMsg = null;

    /**
     * @var string $ErrorNumber
     */
    protected $ErrorNumber = null;

    public function __construct()
    {
    }

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
