<?php namespace DivideBV\Postnl\ComplexTypes;

class CompleteStatusResponseEvent extends BaseType
{

    /**
     * @var string
     */
    protected $Code = null;

    /**
     * @var string
     */
    protected $Description = null;

    /**
     * @var string
     */
    protected $DestinationLocationCode = null;

    /**
     * @var string
     */
    protected $LocationCode = null;

    /**
     * @var string
     */
    protected $RouteCode = null;

    /**
     * @var string
     */
    protected $RouteName = null;

    /**
     * @var string
     */
    protected $TimeStamp = null;

    /**
     * @param string $Code
     * @param string $Description
     * @param string $DestinationLocationCode
     * @param string $LocationCode
     * @param string $RouteCode
     * @param string $RouteName
     * @param string $TimeStamp
     */
    public function __construct(
        $Code,
        $Description,
        $DestinationLocationCode,
        $LocationCode,
        $RouteCode,
        $RouteName,
        $TimeStamp
    ) {
        $this->setCode($Code);
        $this->setDescription($Description);
        $this->setDestinationLocationCode($DestinationLocationCode);
        $this->setLocationCode($LocationCode);
        $this->setRouteCode($RouteCode);
        $this->setRouteName($RouteName);
        $this->setTimeStamp($TimeStamp);
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->Code;
    }

    /**
     * @param string $Code
     * @return CompleteStatusResponseEvent
     */
    public function setCode($Code)
    {
        $this->Code = $Code;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * @param string $Description
     * @return CompleteStatusResponseEvent
     */
    public function setDescription($Description)
    {
        $this->Description = $Description;
        return $this;
    }

    /**
     * @return string
     */
    public function getDestinationLocationCode()
    {
        return $this->DestinationLocationCode;
    }

    /**
     * @param string $DestinationLocationCode
     * @return CompleteStatusResponseEvent
     */
    public function setDestinationLocationCode($DestinationLocationCode)
    {
        $this->DestinationLocationCode = $DestinationLocationCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getLocationCode()
    {
        return $this->LocationCode;
    }

    /**
     * @param string $LocationCode
     * @return CompleteStatusResponseEvent
     */
    public function setLocationCode($LocationCode)
    {
        $this->LocationCode = $LocationCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getRouteCode()
    {
        return $this->RouteCode;
    }

    /**
     * @param string $RouteCode
     * @return CompleteStatusResponseEvent
     */
    public function setRouteCode($RouteCode)
    {
        $this->RouteCode = $RouteCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getRouteName()
    {
        return $this->RouteName;
    }

    /**
     * @param string $RouteName
     * @return CompleteStatusResponseEvent
     */
    public function setRouteName($RouteName)
    {
        $this->RouteName = $RouteName;
        return $this;
    }

    /**
     * @return string
     */
    public function getTimeStamp()
    {
        return $this->TimeStamp;
    }

    /**
     * @param string $TimeStamp
     * @return CompleteStatusResponseEvent
     */
    public function setTimeStamp($TimeStamp)
    {
        $this->TimeStamp = $TimeStamp;
        return $this;
    }
}
