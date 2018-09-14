<?php namespace DivideBV\Postnl\ComplexTypes;

class ResponseShipment extends BaseType
{

    /**
     * @var string
     */
    protected $Barcode = null;

    /**
     * @var string
     */
    protected $DownPartnerBarcode = null;

    /**
     * @var string
     */
    protected $DownPartnerID = null;

    /**
     * @var string
     */
    protected $DownPartnerLocation = null;

    /**
     * @var ArrayOfLabel
     */
    protected $Labels = null;

    /**
     * @var string
     */
    protected $ProductCodeDelivery = null;

    /**
     * @var ArrayOfWarning
     */
    protected $Warnings = null;

    /**
    * @param string $Barcode
    * @param string $DownPartnerBarcode
    * @param string $DownPartnerID
    * @param string $DownPartnerLocation
    * @param ArrayOfLabel $Labels
    * @param string $ProductCodeDelivery
    * @param ArrayOfWarning $Warnings
     */
    public function __construct(
        $Barcode,
        $DownPartnerBarcode,
        $DownPartnerID,
        $DownPartnerLocation,
        ArrayOfLabel $Labels,
        $ProductCodeDelivery,
        ArrayOfWarning $Warnings
    ) {
        $this->setBarcode($Barcode);
        $this->setDownPartnerBarcode($DownPartnerBarcode);
        $this->setDownPartnerID($DownPartnerID);
        $this->setDownPartnerLocation($DownPartnerLocation);
        $this->setLabels($Labels);
        $this->setProductCodeDelivery($ProductCodeDelivery);
        $this->setWarnings($Warnings);
    }

    /**
     * @return string
     */
    public function getBarcode()
    {
        return $this->Barcode;
    }

    /**
     * @param string $Barcode
     * @return ResponseShipment
     */
    public function setBarcode($Barcode)
    {
        $this->Barcode = $Barcode;
        return $this;
    }

    /**
     * @return string
     */
    public function getDownPartnerBarcode()
    {
        return $this->DownPartnerBarcode;
    }

    /**
     * @param string $DownPartnerBarcode
     * @return ResponseShipment
     */
    public function setDownPartnerBarcode($DownPartnerBarcode)
    {
        $this->DownPartnerBarcode = $DownPartnerBarcode;
        return $this;
    }

    /**
     * @return string
     */
    public function getDownPartnerID()
    {
        return $this->DownPartnerID;
    }

    /**
     * @param string $DownPartnerID
     * @return ResponseShipment
     */
    public function setDownPartnerID($DownPartnerID)
    {
        $this->DownPartnerID = $DownPartnerID;
        return $this;
    }

    /**
     * @return string
     */
    public function getDownPartnerLocation()
    {
        return $this->DownPartnerLocation;
    }

    /**
     * @param string $DownPartnerLocation
     * @return ResponseShipment
     */
    public function setDownPartnerLocation($DownPartnerLocation)
    {
        $this->DownPartnerLocation = $DownPartnerLocation;
        return $this;
    }

    /**
     * @return ArrayOfLabel
     */
    public function getLabels()
    {
        return $this->Labels;
    }

    /**
     * @param ArrayOfLabel $Labels
     * @return ResponseShipment
     */
    public function setLabels($Labels)
    {
        $this->Labels = $Labels;
        return $this;
    }

    /**
     * @return string
     */
    public function getProductCodeDelivery()
    {
        return $this->ProductCodeDelivery;
    }

    /**
     * @param string $ProductCodeDelivery
     * @return ResponseShipment
     */
    public function setProductCodeDelivery($ProductCodeDelivery)
    {
        $this->ProductCodeDelivery = $ProductCodeDelivery;
        return $this;
    }

    /**
     * @return ArrayOfWarning
     */
    public function getWarnings()
    {
        return $this->Warnings;
    }

    /**
     * @param ArrayOfWarning $Warnings
     * @return ResponseShipment
     */
    public function setWarnings($Warnings)
    {
        $this->Warnings = $Warnings;
        return $this;
    }
}
