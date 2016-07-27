<?php namespace DivideBV\Postnl\ComplexTypes;

use DateTime;

class GetSignatureResponseSignature extends BaseType
{

    /**
     * @var string $Barcode
     */
    protected $Barcode = null;

    /**
     * @var DateTime $SignatureDate
     */
    protected $SignatureDate = null;

    /**
     * @var base64Binary $SignatureImage
     */
    protected $SignatureImage = null;

    /**
     * @param string $Barcode
     * @param DateTime $SignatureDate
     * @param base64Binary $SignatureImage
     */
    public function __construct($Barcode, DateTime $SignatureDate, $SignatureImage)
    {
        $this->setBarcode($Barcode);
        $this->setSignatureDate($SignatureDate);
        $this->setSignatureImage($SignatureImage);
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
     * @return GetSignatureResponseSignature
     */
    public function setBarcode($Barcode)
    {
        $this->Barcode = $Barcode;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getSignatureDate()
    {
        return $this->SignatureDate;
    }

    /**
     * @param DateTime $SignatureDate
     * @return GetSignatureResponseSignature
     */
    public function setSignatureDate(DateTime $SignatureDate)
    {
        $this->SignatureDate = $SignatureDate;
        return $this;
    }

    /**
     * @return base64Binary
     */
    public function getSignatureImage()
    {
        return $this->SignatureImage;
    }

    /**
     * @param base64Binary $SignatureImage
     * @return GetSignatureResponseSignature
     */
    public function setSignatureImage($SignatureImage)
    {
        $this->SignatureImage = $SignatureImage;
        return $this;
    }
}
