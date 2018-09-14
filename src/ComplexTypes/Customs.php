<?php namespace DivideBV\Postnl\ComplexTypes;

class Customs extends BaseType
{

    /**
     * @var string
     */
    protected $Certificate = null;

    /**
     * @var string
     */
    protected $CertificateNr = null;

    /**
     * @var ArrayOfContent
     */
    protected $Content = null;

    /**
     * @var string
     */
    protected $Currency = null;

    /**
     * @var string
     */
    protected $HandleAsNonDeliverable = null;

    /**
     * @var string
     */
    protected $Invoice = null;

    /**
     * @var string
     */
    protected $InvoiceNr = null;

    /**
     * @var string
     */
    protected $License = null;

    /**
     * @var string
     */
    protected $LicenseNr = null;

    /**
     * @var string
     */
    protected $ShipmentType = null;

    /**
     * @param string $Certificate
     * @param string $CertificateNr
     * @param ArrayOfContent $Content
     * @param string $Currency
     * @param string $HandleAsNonDeliverable
     * @param string $Invoice
     * @param string $InvoiceNr
     * @param string $License
     * @param string $LicenseNr
     * @param string $ShipmentType
     */
    public function __construct(
        $Certificate,
        $CertificateNr,
        ArrayOfContent $Content,
        $Currency,
        $HandleAsNonDeliverable,
        $Invoice,
        $InvoiceNr,
        $License,
        $LicenseNr,
        $ShipmentType
    ) {
        $this->setCertificate($Certificate);
        $this->setCertificateNr($CertificateNr);
        $this->setContent($Content);
        $this->setCurrency($Currency);
        $this->setHandleAsNonDeliverable($HandleAsNonDeliverable);
        $this->setInvoice($Invoice);
        $this->setInvoiceNr($InvoiceNr);
        $this->setLicense($License);
        $this->setLicenseNr($LicenseNr);
        $this->setShipmentType($ShipmentType);
    }

    /**
     * @return string
     */
    public function getCertificate()
    {
        return $this->Certificate;
    }

    /**
     * @param string $Certificate
     * @return Customs
     */
    public function setCertificate($Certificate)
    {
        $this->Certificate = $Certificate;
        return $this;
    }

    /**
     * @return string
     */
    public function getCertificateNr()
    {
        return $this->CertificateNr;
    }

    /**
     * @param string $CertificateNr
     * @return Customs
     */
    public function setCertificateNr($CertificateNr)
    {
        $this->CertificateNr = $CertificateNr;
        return $this;
    }

    /**
     * @return ArrayOfContent
     */
    public function getContent()
    {
        return $this->Content;
    }

    /**
     * @param ArrayOfContent $Content
     * @return Customs
     */
    public function setContent($Content)
    {
        $this->Content = $Content;
        return $this;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
        return $this->Currency;
    }

    /**
     * @param string $Currency
     * @return Customs
     */
    public function setCurrency($Currency)
    {
        $this->Currency = $Currency;
        return $this;
    }

    /**
     * @return string
     */
    public function getHandleAsNonDeliverable()
    {
        return $this->HandleAsNonDeliverable;
    }

    /**
     * @param string $HandleAsNonDeliverable
     * @return Customs
     */
    public function setHandleAsNonDeliverable($HandleAsNonDeliverable)
    {
        $this->HandleAsNonDeliverable = $HandleAsNonDeliverable;
        return $this;
    }

    /**
     * @return string
     */
    public function getInvoice()
    {
        return $this->Invoice;
    }

    /**
     * @param string $Invoice
     * @return Customs
     */
    public function setInvoice($Invoice)
    {
        $this->Invoice = $Invoice;
        return $this;
    }

    /**
     * @return string
     */
    public function getInvoiceNr()
    {
        return $this->InvoiceNr;
    }

    /**
     * @param string $InvoiceNr
     * @return Customs
     */
    public function setInvoiceNr($InvoiceNr)
    {
        $this->InvoiceNr = $InvoiceNr;
        return $this;
    }

    /**
     * @return string
     */
    public function getLicense()
    {
        return $this->License;
    }

    /**
     * @param string $License
     * @return Customs
     */
    public function setLicense($License)
    {
        $this->License = $License;
        return $this;
    }

    /**
     * @return string
     */
    public function getLicenseNr()
    {
        return $this->LicenseNr;
    }

    /**
     * @param string $LicenseNr
     * @return Customs
     */
    public function setLicenseNr($LicenseNr)
    {
        $this->LicenseNr = $LicenseNr;
        return $this;
    }

    /**
     * @return string
     */
    public function getShipmentType()
    {
        return $this->ShipmentType;
    }

    /**
     * @param string $ShipmentType
     * @return Customs
     */
    public function setShipmentType($ShipmentType)
    {
        $this->ShipmentType = $ShipmentType;
        return $this;
    }
}
