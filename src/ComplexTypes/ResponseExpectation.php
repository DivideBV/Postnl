<?php namespace DivideBV\Postnl\ComplexTypes;

use DateTime;

class ResponseExpectation extends BaseType
{

    /**
     * @var DateTime
     */
    protected $ETAFrom = null;

    /**
     * @var DateTime
     */
    protected $ETATo = null;

    /**
     * @param DateTime $ETAFrom
     * @param DateTime $ETATo
     */
    public function __construct(DateTime $ETAFrom, DateTime $ETATo)
    {
        $this->setETAFrom($ETAFrom);
        $this->setETATo($ETATo);
    }

    /**
     * @return DateTime
     */
    public function getETAFrom()
    {
        return $this->ETAFrom;
    }

    /**
     * @param DateTime $ETAFrom
     * @return ResponseExpectation
     */
    public function setETAFrom(DateTime $ETAFrom)
    {
        $this->ETAFrom = $ETAFrom;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getETATo()
    {
        return $this->ETATo;
    }

    /**
     * @param DateTime $ETATo
     * @return ResponseExpectation
     */
    public function setETATo(DateTime $ETATo)
    {
        $this->ETATo = $ETATo;
        return $this;
    }
}
