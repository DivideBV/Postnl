<?php namespace DivideBV\Postnl\ComplexTypes;

/**
 * Describes a group of shipments.
 *
 * @see ArrayOfGroup
 */
class Group extends BaseType
{

    /**
     * Amount of shipments in the group.
     *
     * @var string
     */
    protected $GroupCount = null;

    /**
     * Sequence number.
     *
     * @var string
     */
    protected $GroupSequence = null;

    /**
     * The type of group.
     *
     * Possible values:
     *
     * - `01`: Collection request
     * - `03`: Multiple parcels in one shipment (multi-colli)
     * - `04`: Single parcel in one shipment
     *
     * @var string
     */
    protected $GroupType = null;

    /**
     * Main barcode for the shipment.
     *
     * @var string
     */
    protected $MainBarcode = null;

    /**
     * Constructor.
     *
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
     * Get self::$GroupCount.
     *
     * @return string
     */
    public function getGroupCount()
    {
        return $this->GroupCount;
    }

    /**
     * Set self::$GroupCount.
     *
     * @param string $GroupCount
     * @return Group
     */
    public function setGroupCount($GroupCount)
    {
        $this->GroupCount = $GroupCount;
        return $this;
    }

    /**
     * Get self::$GroupSequence.
     *
     * @return string
     */
    public function getGroupSequence()
    {
        return $this->GroupSequence;
    }

    /**
     * Set self::$GroupSequence.
     *
     * @param string $GroupSequence
     * @return Group
     */
    public function setGroupSequence($GroupSequence)
    {
        $this->GroupSequence = $GroupSequence;
        return $this;
    }

    /**
     * Get self::$GroupType.
     *
     * @return string
     */
    public function getGroupType()
    {
        return $this->GroupType;
    }

    /**
     * Set self::$GroupType.
     *
     * @param string $GroupType
     * @return Group
     */
    public function setGroupType($GroupType)
    {
        $this->GroupType = $GroupType;
        return $this;
    }

    /**
     * Get self::$MainBarcode.
     *
     * @return string
     */
    public function getMainBarcode()
    {
        return $this->MainBarcode;
    }

    /**
     * Set self::$MainBarcode.
     *
     * @param string $MainBarcode
     * @return Group
     */
    public function setMainBarcode($MainBarcode)
    {
        $this->MainBarcode = $MainBarcode;
        return $this;
    }
}
