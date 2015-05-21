<?php namespace DivideBV\Postnl\ComplexTypes;

class CifException extends BaseType
{

    /**
     * @var ArrayOfExceptionData $Errors
     */
    protected $Errors = null;

    public function __construct()
    {
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
    public function setErrors($Errors)
    {
        $this->Errors = $Errors;
        return $this;
    }
}
