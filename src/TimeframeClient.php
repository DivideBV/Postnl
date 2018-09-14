<?php namespace DivideBV\Postnl;

/**
 * Client class for CIF's location service.
 */
class TimeframeClient extends BaseClient
{

    /**
     * @var string The URL of the production WSDL.
     */
    const PRODUCTION_WSDL = 'https://api.postnl.nl/shipment/v2_0/calculate/timeframes/soap.wsdl';

    /**
     * @var string The URL of the sandbox WSDL.
     */
    const SANDBOX_WSDL = 'https://api-sandbox.postnl.nl/shipment/v2_0/calculate/timeframes/soap.wsdl';

    /**
     * @var array The complex types used by this client.
     */
    protected $classes = [
        'GetTimeframes',
        'ArrayOfReasonNoTimeframe',
        'ArrayOfTimeframe',
        'ArrayOfTimeframeTimeFrame',
        'GetTimeframesRequest',
        'GetTimeframesResponse',
        'Message',
        'ReasonNoTimeframe',
        'Timeframe',
        'TimeframeRequest',
        'TimeframeTimeFrame',
    ];

    /**
     * @param ComplexTypes\GetTimeframesRequest $getTimeframes
     * @return mixed
     */
    public function getTimeframes(ComplexTypes\GetTimeframesRequest $getTimeframes)
    {
        return $this->__soapCall('GetTimeframes', [$getTimeframes]);
    }
}
