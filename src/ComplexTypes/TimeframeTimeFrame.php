<?php namespace DivideBV\Postnl\ComplexTypes;

class TimeframeTimeFrame extends BaseType
{

    /**
     * @var string $From
     */
    protected $From = null;

    /**
     * @var string $To
     */
    protected $To = null;


    /**
     * @var string[] $Options
     */
    protected $Options = null;

    /**
     * @param string $From
     * @param string $To
     * @param array $Options
     */
    public function __construct($From, $To, array $Options)
    {
        $this->setFrom($From);
        $this->setTo($To);
        $this->setOptions($Options);
    }

    /**
     * @return string
     */
    public function getFrom()
    {
        return $this->From;
    }

    /**
     * @param string $From
     * @return TimeframeTimeFrame
     */
    public function setFrom($From)
    {
        $this->From = $From;
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
     * @return TimeframeTimeFrame
     */
    public function setOptions(array $Options)
    {
        $this->Options = $Options;
        return $this;
    }

    /**
     * @return string
     */
    public function getTo()
    {
        return $this->To;
    }

    /**
     * @param string $To
     * @return TimeframeTimeFrame
     */
    public function setTo($To)
    {
        $this->To = $To;
        return $this;
    }
}
