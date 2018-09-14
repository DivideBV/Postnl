<?php namespace DivideBV\Postnl\ComplexTypes;

class Label extends BaseType
{

    /**
     * @var string In base64 encoding.
     */
    protected $Content = null;

    /**
     * @var string
     */
    protected $Contenttype = null;

    /**
     * @var string
     */
    protected $Labeltype = null;

    /**
     * @param string $Content In base64 encoding.
     * @param string $Contenttype
     * @param string $Labeltype
     */
    public function __construct($Content, $Contenttype, $Labeltype)
    {
        $this->setContent($Content);
        $this->setContenttype($Contenttype);
        $this->setLabeltype($Labeltype);
    }

    /**
     * @return string In base64 encoding.
     */
    public function getContent()
    {
        return $this->Content;
    }

    /**
     * @param string $Content In base64 encoding.
     * @return Label
     */
    public function setContent($Content)
    {
        $this->Content = $Content;
        return $this;
    }

    /**
     * @return string
     */
    public function getContenttype()
    {
        return $this->Contenttype;
    }

    /**
     * @param string $Contenttype
     * @return Label
     */
    public function setContenttype($Contenttype)
    {
        $this->Contenttype = $Contenttype;
        return $this;
    }

    /**
     * @return string
     */
    public function getLabeltype()
    {
        return $this->Labeltype;
    }

    /**
     * @param string $Labeltype
     * @return Label
     */
    public function setLabeltype($Labeltype)
    {
        $this->Labeltype = $Labeltype;
        return $this;
    }
}
