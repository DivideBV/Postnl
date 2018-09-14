<?php namespace DivideBV\Postnl\ComplexTypes;

class Warning extends BaseType
{

    /**
     * @var string
     */
    protected $Code = null;

    /**
     * @var string
     */
    protected $Description = null;

    /**
     * @param string $Code
     * @param string $Description
     */
    public function __construct($Code, $Description)
    {
        $this->setCode($Code);
        $this->setDescription($Description);
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->Code;
    }

    /**
     * @param string $Code
     * @return Warning
     */
    public function setCode($Code)
    {
        $this->Code = $Code;
        return $this;
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
     * @return Warning
     */
    public function setDescription($Description)
    {
        $this->Description = $Description;
        return $this;
    }
}
