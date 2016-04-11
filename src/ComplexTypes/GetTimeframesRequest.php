<?php namespace DivideBV\Postnl\ComplexTypes;

class GetTimeframesRequest extends BaseType
{

    /**
     * @var Message $Message
     */
    protected $Message = null;

    /**
     * @var Timeframe $Location
     */
    protected $Timeframe = null;

    /**
     * GetNearestLocationsRequest constructor.
     * @param Message $Message
     * @param Timeframe $Timeframe
     */
    public function __construct(
        Message $Message,
        Timeframe $Timeframe
    ) {
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
     * @return Timeframe
     */
    public function getTimeframe()
    {
        return $this->Timeframe;
    }

    /**
     * @param Timeframe $Timeframe
     */
    public function setTimeframe($Timeframe)
    {
        $this->Timeframe = $Timeframe;
    }
}
