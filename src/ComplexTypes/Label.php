<?php namespace DivideBV\Postnl\ComplexTypes;

class Label
{

    /**
     * @var base64Binary $Content
     */
    protected $Content = null;

    /**
     * @var string $Contenttype
     */
    protected $Contenttype = null;

    /**
     * @var string $Labeltype
     */
    protected $Labeltype = null;

    /**
     * @param base64Binary $Content
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
     * @return base64Binary
     */
    public function getContent()
    {
        return $this->Content;
    }

    /**
     * @param base64Binary $Content
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
