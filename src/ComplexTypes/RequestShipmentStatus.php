<?php namespace DivideBV\Postnl\ComplexTypes;

class RequestShipmentStatus extends BaseType
{

    /**
     * @var string
     */
    protected $StatusCode = null;

    /**
     * @var string
     */
    protected $DateFrom = null;

    /**
     * @var string
     */
    protected $DateTo = null;

    /**
     * @param string $StatusCode
     * @param string $DateFrom
     * @param string $DateTo
     */
    public function __construct($StatusCode, $DateFrom, $DateTo)
    {
        $this->setStatusCode($StatusCode);
        $this->setDateFrom($DateFrom);
        $this->setDateTo($DateTo);
    }

    /**
     * @return string
     */
    public function getStatusCode()
    {
        return $this->StatusCode;
    }

    /**
     * @param string $StatusCode
     * @return RequestShipmentStatus
     */
    public function setStatusCode($StatusCode)
    {
        $this->StatusCode = $StatusCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getDateFrom()
    {
        return $this->DateFrom;
    }

    /**
     * @param string $DateFrom
     * @return RequestShipmentStatus
     */
    public function setDateFrom($DateFrom)
    {
        $this->DateFrom = $DateFrom;
        return $this;
    }

    /**
     * @return string
     */
    public function getDateTo()
    {
        return $this->DateTo;
    }

    /**
     * @param string $DateTo
     * @return RequestShipmentStatus
     */
    public function setDateTo($DateTo)
    {
        $this->DateTo = $DateTo;
        return $this;
    }
}
