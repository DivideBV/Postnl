<?php namespace DivideBV\Postnl\ComplexTypes;

class ResponseShipment
{

    /**
     * @var string $Barcode
     */
    protected $Barcode = null;

    /**
     * @var string $DownPartnerBarcode
     */
    protected $DownPartnerBarcode = null;

    /**
     * @var string $DownPartnerID
     */
    protected $DownPartnerID = null;

    /**
     * @var string $DownPartnerLocation
     */
    protected $DownPartnerLocation = null;

    /**
     * @var ArrayOfLabel $Labels
     */
    protected $Labels = null;

    /**
     * @var string $ProductCodeDelivery
     */
    protected $ProductCodeDelivery = null;

    /**
     * @var ArrayOfWarning $Warnings
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
