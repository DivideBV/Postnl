<?php namespace DivideBV\Postnl\ComplexTypes;

class ArrayOfExceptionData extends BaseType
{

    /**
     * @var ExceptionData[]
     */
    protected $ExceptionData = null;

    /**
     * @param ExceptionData[] $ExceptionData
     * @return ArrayOfExceptionData
     */
    public function __construct(array $ExceptionData)
    {
        $this->setExceptionData($ExceptionData);
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
