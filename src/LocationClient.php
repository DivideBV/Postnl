<?php namespace DivideBV\Postnl;

/**
 * Client class for CIF's shipping status service.
 */
class LocationClient extends BaseClient
{

    /**
     * The URL of the production WSDL.
     */
    const PRODUCTION_WSDL = 'https://service.postnl.com/CIF/LocationWebService/2_0/?wsdl';

    /**
     * The URL of the sandbox WSDL.
     */
    const SANDBOX_WSDL = 'https://testservice.postnl.com/CIF_SB/LocationWebService/2_0/?wsdl';

    /**
     * @var array $classes
     *     The complex types used by this client.
     */
    protected $classes = [
        'GetNearestLocation',
    ];

    public function GetNearestLocation(ComplexTypes\GetNearestLocationsRequest $getNearestLocations)
    {
        return $this->__soapCall('GetNearestLocations', [$getNearestLocations]);
    }

    public function GetLocationsInArea(ComplexTypes\GetLocationsInAreaRequest $getLocationsInArea)
    {
        return $this->__soapCall('GetLocationsInArea', [$getLocationsInArea]);
    }
}