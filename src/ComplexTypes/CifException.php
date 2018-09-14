<?php namespace DivideBV\Postnl\ComplexTypes;

class CifException extends \Exception
{

    /**
     * @var ArrayOfExceptionData
     */
    protected $Errors = null;

    /**
     * @param ArrayOfExceptionData $Errors
     * @return CifException
     */
    public function __construct(ArrayOfExceptionData $Errors)
    {
        $this->setErrors($Errors);
    }

    /**
     * @return ArrayOfExceptionData
     */
    public function getErrors()
    {
        return $this->Errors;
    }

    /**
     * @param ArrayOfExceptionData $Errors
     * @return CifException
     */
    public function setErrors(ArrayOfExceptionData $Errors)
    {
        $this->Errors = $Errors;
        return $this;
    }
}
