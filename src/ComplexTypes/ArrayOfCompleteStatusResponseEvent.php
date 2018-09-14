<?php namespace DivideBV\Postnl\ComplexTypes;

class ArrayOfCompleteStatusResponseEvent extends BaseArrayOfType
{

    /**
     * @var string The name of the array property this class is a wrapper of.
     */
    const WRAPPED_PROPERTY = 'CompleteStatusResponseEvent';

    /**
     * @var CompleteStatusResponseEvent[]
     */
    protected $CompleteStatusResponseEvent = null;

    /**
     * @param CompleteStatusResponseEvent[] $CompleteStatusResponseEvent
     */
    public function __construct(array $CompleteStatusResponseEvent)
    {
        $this->setCompleteStatusResponseEvent($CompleteStatusResponseEvent);
    }

    /**
     * @return CompleteStatusResponseEvent[]
     */
    public function getCompleteStatusResponseEvent()
    {
        return $this->CompleteStatusResponseEvent;
    }

    /**
     * @param CompleteStatusResponseEvent[] $CompleteStatusResponseEvent
     * @return ArrayOfCompleteStatusResponseEvent
     */
    public function setCompleteStatusResponseEvent(array $CompleteStatusResponseEvent)
    {
        $this->CompleteStatusResponseEvent = $CompleteStatusResponseEvent;
        return $this;
    }
}
