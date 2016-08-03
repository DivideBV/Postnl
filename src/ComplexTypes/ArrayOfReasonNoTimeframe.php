<?php namespace DivideBV\Postnl\ComplexTypes;

class ArrayOfReasonNoTimeframe extends BaseArrayOfType
{

    /**
     * The name of the array property this class is a wrapper of.
     */
    const WRAPPED_PROPERTY = 'ReasonNoTimeframe';

    /**
     * @var ReasonNoTimeframe[] $ReasonNoTimeframe
     */
    protected $ReasonNoTimeframe = null;

    /**
     * @param ReasonNoTimeframe[] $ReasonNoTimeFrame
     */
    public function __construct(array $ReasonNoTimeFrame)
    {
        $this->setReasonNoTimeframe($ReasonNoTimeFrame);
    }

    /**
     * @return ReasonNoTimeframe[]
     */
    public function getReasonNoTimeframe()
    {
        return $this->ReasonNoTimeframe;
    }

    /**
     * @param ReasonNoTimeframe[] $ReasonNoTimeframe
     * @return ArrayOfReasonNoTimeframe
     */
    public function setReasonNoTimeframe(array $ReasonNoTimeframe)
    {
        $this->ReasonNoTimeframe = $ReasonNoTimeframe;
        return $this;
    }
}
