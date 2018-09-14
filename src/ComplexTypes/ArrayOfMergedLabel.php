<?php namespace DivideBV\Postnl\ComplexTypes;

class ArrayOfMergedLabel extends BaseArrayOfType
{

    /**
     * @var string The name of the array property this class is a wrapper of.
     */
    const WRAPPED_PROPERTY = 'MergedLabel';

    /**
     * @var MergedLabel[]
     */
    protected $MergedLabel = null;

    /**
     * @param MergedLabel[] $MergedLabel
     */
    public function __construct(array $MergedLabel)
    {
        $this->setMergedLabel($MergedLabel);
    }

    /**
     * @return MergedLabel[]
     */
    public function getMergedLabel()
    {
        return $this->MergedLabel;
    }

    /**
     * @param MergedLabel[] $MergedLabel
     * @return ArrayOfMergedLabel
     */
    public function setMergedLabel(array $MergedLabel)
    {
        $this->MergedLabel = $MergedLabel;
        return $this;
    }
}
