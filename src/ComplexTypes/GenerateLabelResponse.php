<?php namespace DivideBV\Postnl\ComplexTypes;

class GenerateLabelResponse extends BaseType
{

    /**
     * @var ArrayOfMergedLabel $MergedLabels
     */
    protected $MergedLabels = null;

    /**
     * @var ArrayOfResponseShipment $ResponseShipments
     */
    protected $ResponseShipments = null;

    /**
     * @param ArrayOfMergedLabel $MergedLabels
     * @param ArrayOfResponseShipment $ResponseShipments
     */
    public function __construct(
        ArrayOfMergedLabel $MergedLabels = null,
        ArrayOfResponseShipment $ResponseShipments = null
    ) {
        $this->setMergedLabels($MergedLabels);
        $this->setResponseShipments($ResponseShipments);
    }

    /**
     * @return ArrayOfMergedLabel
     */
    public function getMergedLabels()
    {
        return $this->MergedLabels;
    }

    /**
     * @param ArrayOfMergedLabel $MergedLabels
     * @return GenerateLabelResponse
     */
    public function setMergedLabels($MergedLabels)
    {
        $this->MergedLabels = $MergedLabels;
        return $this;
    }

    /**
     * @return ArrayOfResponseShipment
     */
    public function getResponseShipments()
    {
        return $this->ResponseShipments;
    }

    /**
     * @param ArrayOfResponseShipment $ResponseShipments
     * @return GenerateLabelResponse
     */
    public function setResponseShipments($ResponseShipments)
    {
        $this->ResponseShipments = $ResponseShipments;
        return $this;
    }
}
