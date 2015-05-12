<?php namespace DivideBV\Postnl\ComplexTypes;

class ArrayOfGroup
{

    /**
     * @var Group[] $Group
     */
    protected $Group = null;

    /**
     * @param Group[] $Group
     */
    public function __construct(array $Group)
    {
        $this->setGroup($Group);
    }

    /**
     * @return Group[]
     */
    public function getGroup()
    {
        return $this->Group;
    }

    /**
     * @param Group[] $Group
     * @return ArrayOfGroup
     */
    public function setGroup(array $Group)
    {
        $this->Group = $Group;
        return $this;
    }
}
