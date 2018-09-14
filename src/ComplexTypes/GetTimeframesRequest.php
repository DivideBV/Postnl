<?php namespace DivideBV\Postnl\ComplexTypes;

class GetTimeframesRequest extends BaseType
{

    /**
     * @var Message
     */
    protected $Message = null;

    /**
     * @var TimeframeRequest
     */
    protected $Timeframe = null;

    /**
     * @param Message $Message
     * @param TimeframeRequest $Timeframe
     */
    public function __construct(Message $Message, TimeframeRequest $Timeframe)
    {
        $this->setMessage($Message);
        $this->setTimeframe($Timeframe);
    }

    /**
     * @return Message
     */
    public function getMessage()
    {
        return $this->Message;
    }

    /**
     * @param Message $Message
     */
    public function setMessage($Message)
    {
        $this->Message = $Message;
    }

    /**
     * @return TimeframeRequest
     */
    public function getTimeframe()
    {
        return $this->Timeframe;
    }

    /**
     * @param TimeframeRequest $Timeframe
     */
    public function setTimeframe($Timeframe)
    {
        $this->Timeframe = $Timeframe;
    }
}
