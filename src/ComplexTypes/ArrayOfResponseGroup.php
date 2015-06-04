<?php namespace DivideBV\Postnl\ComplexTypes;

class ArrayOfResponseGroup extends BaseType
{

    /**
     * @var ResponseGroup[] $ResponseGroup
     */
    protected $ResponseGroup = null;

    /**
     * @param ResponseGroup[] $ResponseGroup
     */
    public function __construct(array $ResponseGroup)
    {
        $this->setResponseGroup($ResponseGroup);
    }

    /**
     * @return ResponseGroup[]
     */
    public function getResponseGroup()
    {
        return $this->ResponseGroup;
    }

    /**
     * @param ResponseGroup[] $ResponseGroup
     * @return ArrayOfResponseGroup
     */
    public function setResponseGroup(array $ResponseGroup)
    {
        $this->ResponseGroup = $ResponseGroup;
        return $this;
    }
}
