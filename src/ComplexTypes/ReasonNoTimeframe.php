<?php namespace DivideBV\Postnl\ComplexTypes;

class ReasonNoTimeframe extends BaseType
{

    /**
     * @var string
     */
    protected $Code = null;

    /**
     * @var string
     */
    protected $Date = null;

    /**
     * @var string
     */
    protected $Description = null;

    /**
     * @var string[]
     */
    protected $Options = null;

    /**
     * @param string $Code
     * @param string $Date
     * @param string $Description
     * @param string[] $Options
     */
    public function __construct($Code, $Date, $Description, array $Options)
    {
        $this->setCode($Code);
        $this->setDate($Date);
        $this->setDescription($Description);
        $this->setOptions($Options);
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
     * @return ReasonNoTimeframe
     */
    public function setCode($Code)
    {
        $this->Code = $Code;
        return $this;
    }

    /**
     * @return string
     */
    public function getDate()
    {
        return $this->Date;
    }

    /**
     * @param string $Date
     * @return ReasonNoTimeframe
     */
    public function setDate($Date)
    {
        $this->Date = $Date;
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
     * @return ReasonNoTimeframe
     */
    public function setDescription($Description)
    {
        $this->Description = $Description;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getOptions()
    {
        return $this->Options;
    }

    /**
     * @param string[] $Options
     * @return ReasonNoTimeframe
     */
    public function setOptions($Options)
    {
        $this->Options = $Options;
        return $this;
    }
}
