<?php namespace DivideBV\Postnl\ComplexTypes;

class ArrayOfExceptionData
{

    /**
     * @var ExceptionData[] $ExceptionData
     */
    protected $ExceptionData = null;

    public function __construct()
    {
    }

    /**
     * @return ExceptionData[]
     */
    public function getExceptionData()
    {
        return $this->ExceptionData;
    }

    /**
     * @param ExceptionData[] $ExceptionData
     * @return ArrayOfExceptionData
     */
    public function setExceptionData(array $ExceptionData)
    {
        $this->ExceptionData = $ExceptionData;
        return $this;
    }
}
