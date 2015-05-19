<?php namespace DivideBV\Postnl\ComplexTypes;

class ArrayOfWarning
{

    /**
     * @var Warning[] $Warning
     */
    protected $Warning = null;

    /**
     * @param Warning[] $Warning
     */
    public function __construct(array $Warning)
    {
        $this->setWarning($Warning);
    }

    /**
     * @return Warning[]
     */
    public function getWarning()
    {
        return $this->Warning;
    }

    /**
     * @param Warning[] $Warning
     * @return ArrayOfWarning
     */
    public function setWarning(array $Warning)
    {
        $this->Warning = $Warning;
        return $this;
    }
}
