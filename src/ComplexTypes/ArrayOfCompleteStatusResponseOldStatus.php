<?php namespace DivideBV\Postnl\ComplexTypes;

class ArrayOfCompleteStatusResponseOldStatus extends BaseType
{

    /**
     * @var CompleteStatusResponseOldStatus[] $CompleteStatusResponseOldStatus
     */
    protected $CompleteStatusResponseOldStatus = null;

    /**
     * @param CompleteStatusResponseOldStatus[] $CompleteStatusResponseOldStatus
     */
    public function __construct(array $CompleteStatusResponseOldStatus)
    {
        $this->setCompleteStatusResponseOldStatus($CompleteStatusResponseOldStatus);
    }

    /**
     * @return CompleteStatusResponseOldStatus[]
     */
    public function getCompleteStatusResponseOldStatus()
    {
        return $this->CompleteStatusResponseOldStatus;
    }

    /**
     * @param CompleteStatusResponseOldStatus[] $CompleteStatusResponseOldStatus
     * @return ArrayOfCompleteStatusResponseOldStatus
     */
    public function setCompleteStatusResponseOldStatus(array $CompleteStatusResponseOldStatus)
    {
        $this->CompleteStatusResponseOldStatus = $CompleteStatusResponseOldStatus;
        return $this;
    }
}
