<?php namespace DivideBV\Postnl\ComplexTypes;

/**
 * XML namespace: http://postnl.nl/cif/domain/BarcodeWebService/
 */
class GenerateBarcodeMessage extends BaseType
{

    /**
     * @var Message
     */
    protected $Message = null;

    /**
     * @var GenerateBarcodeCustomer
     */
    protected $Customer = null;

    /**
     * @var Barcode
     */
    protected $Barcode = null;

    /**
     * @param Message $Message
     * @param GenerateBarcodeCustomer $Customer
     * @param Barcode $Barcode
     */
    public function __construct(Message $Message, GenerateBarcodeCustomer $Customer, Barcode $Barcode)
    {
        $this->setMessage($Message);
        $this->setCustomer($Customer);
        $this->setBarcode($Barcode);
    }

    /**
     * @return Message
     */
    public function getMessage()
    {
        return $this->Message;
    }

    /**
     * @param Message $Message
     * @return GenerateBarcodeMessage
     */
    public function setMessage($Message)
    {
        $this->Message = $Message;
        return $this;
    }

    /**
     * @return GenerateBarcodeCustomer
     */
    public function getCustomer()
    {
        return $this->Customer;
    }

    /**
     * @param GenerateBarcodeCustomer $Customer
     * @return GenerateBarcodeMessage
     */
    public function setCustomer($Customer)
    {
        $this->Customer = $Customer;
        return $this;
    }

    /**
     * @return Barcode
     */
    public function getBarcode()
    {
        return $this->Barcode;
    }

    /**
     * @param Barcode $Barcode
     * @return GenerateBarcodeMessage
     */
    public function setBarcode($Barcode)
    {
        $this->Barcode = $Barcode;
        return $this;
    }
}
