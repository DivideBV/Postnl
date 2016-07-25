<?php namespace DivideBV\Postnl\ComplexTypes;

class TimeframeTimeFrame extends BaseType
{

    /**
     * @var string $From
     */
    protected $From = null;

    /**
     * @var string[] $Options
     */
    protected $Options = null;

    /**
     * @var string $To
     */
    protected $To = null;

    /**
     * @param string $From
     * @param array $Options
     * @param string $To
     */
    public function __construct($From, array $Options, $To)
    {
        $this->setFrom($From);
        $this->setOptions($Options);
        $this->setTo($To);
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
