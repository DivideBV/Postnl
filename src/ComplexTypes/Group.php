<?php namespace DivideBV\Postnl\ComplexTypes;

class Group
{

    /**
     * @var string $GroupCount
     */
    protected $GroupCount = null;

    /**
     * @var string $GroupSequence
     */
    protected $GroupSequence = null;

    /**
     * @var string $GroupType
     */
    protected $GroupType = null;

    /**
     * @var string $MainBarcode
     */
    protected $MainBarcode = null;

    /**
     * @param string $GroupCount
     * @param string $GroupSequence
     * @param string $GroupType
     * @param string $MainBarcode
     */
    public function __construct($GroupCount, $GroupSequence, $GroupType, $MainBarcode)
    {
        $this->setGroupCount($GroupCount);
        $this->setGroupSequence($GroupSequence);
        $this->setGroupType($GroupType);
        $this->setMainBarcode($MainBarcode);
    }

    /**
     * @return string
     */
    public function getGroupCount()
    {
        return $this->GroupCount;
    }

    /**
     * @param string $GroupCount
     * @return Group
     */
    public function setGroupCount($GroupCount)
    {
        $this->GroupCount = $GroupCount;
        return $this;
    }

    /**
     * @return string
     */
    public function getGroupSequence()
    {
        return $this->GroupSequence;
    }

    /**
     * @param string $GroupSequence
     * @return Group
     */
    public function setGroupSequence($GroupSequence)
    {
        $this->GroupSequence = $GroupSequence;
        return $this;
    }

    /**
     * @return string
     */
    public function getGroupType()
    {
        return $this->GroupType;
    }

    /**
     * @param string $GroupType
     * @return Group
     */
    public function setGroupType($GroupType)
    {
        $this->GroupType = $GroupType;
        return $this;
    }

    /**
     * @return string
     */
    public function getMainBarcode()
    {
        return $this->MainBarcode;
    }

    /**
     * @param string $MainBarcode
     * @return Group
     */
    public function setMainBarcode($MainBarcode)
    {
        $this->MainBarcode = $MainBarcode;
        return $this;
    }
}
