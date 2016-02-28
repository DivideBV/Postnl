<?php namespace DivideBV\Postnl\ComplexTypes;

class GetNearestLocationsRequest extends BaseType
{

    /**
     * @var Message $Message
     */
    protected $Message = null;

    /**
     * @var RequestCustomer $Customer
     */
    protected $Location = null;

    /**
     * @var RequestShipment $Shipment
     */
    protected $Countrycode = 'NL';

    /**
     * @param Message $Message
     */
    public function __construct(
        Message $Message,
        Location $Location
    ) {
        $this->setMessage($Message);
        $this->setLocation($Location);
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
     */
    public function setMessage($Message)
    {
        $this->Message = $Message;
    }

    /**
     * @return RequestCustomer
     */
    public function getLocation()
    {
        return $this->Location;
    }

    /**
     * @param RequestCustomer $Location
     */
    public function setLocation($Location)
    {
        $this->Location = $Location;
    }

    /**
     * @return RequestShipment
     */
    public function getCountrycode()
    {
        return $this->Countrycode;
    }

    /**
     * @param RequestShipment $Countrycode
     */
    public function setCountrycode($Countrycode)
    {
        $this->Countrycode = $Countrycode;
    }

    
}
