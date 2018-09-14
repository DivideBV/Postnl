<?php namespace DivideBV\Postnl\ComplexTypes;

class LabellingMessage extends Message
{

    /**
     * @var string
     */
    protected $Printertype = null;

    /**
     * @param string $Printertype
     *     The file type used to generate the label. Defaults to PDF.
     * @param string $MessageID
     *     Defaults to 1.
     * @param string $MessageTimeStamp
     *     Defaults to the current time.
     */
    public function __construct($Printertype = 'GraphicFile|PDF', $MessageID = 1, $MessageTimeStamp = null)
    {
        parent::__construct($MessageID, $MessageTimeStamp);
        $this->setPrintertype($Printertype);
    }

    /**
     * @return string
     */
    public function getPrintertype()
    {
        return $this->Printertype;
    }

    /**
     * @param string $Printertype
     */
    public function setPrintertype($Printertype)
    {
        $this->Printertype = $Printertype;
    }
}
