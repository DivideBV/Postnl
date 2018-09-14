<?php namespace DivideBV\Postnl\ComplexTypes;

class GetSentDateResponse extends BaseType
{

    /**
     * @var string
     */
    protected $SentDate = null;

    /**
     * @param string $SentDate
     */
    public function __construct($SentDate)
    {
        $this->setSentDate($SentDate);
    }

    /**
     * @return string
     */
    public function getSentDate()
    {
        return $this->SentDate;
    }

    /**
     * @param string $SentDate
     * @return GetSentDateResponse
     */
    public function setSentDate($SentDate)
    {
        $this->SentDate = $SentDate;
        return $this;
    }
}
