<?php namespace DivideBV\Postnl\ComplexTypes;

class ArrayOfContent
{

    /**
     * @var Content[] $Content
     */
    protected $Content = null;

    /**
     * @param Content[] $Content
     */
    public function __construct(array $Content)
    {
        $this->setContent($Content);
    }

    /**
     * @return Content[]
     */
    public function getContent()
    {
        return $this->Content;
    }

    /**
     * @param Content[] $Content
     * @return ArrayOfContent
     */
    public function setContent(array $Content)
    {
        $this->Content = $Content;
        return $this;
    }
}
