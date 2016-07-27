<?php namespace DivideBV\Postnl;

/**
 * Client class for CIF's location service.
 */
class TimeframeClient extends BaseClient
{

    /**
     * The URL of the production WSDL.
     */
    const PRODUCTION_WSDL = 'https://service.postnl.com/CIF/TimeframeWebService/2_0/?wsdl';

    /**
     * The URL of the sandbox WSDL.
     */
    const SANDBOX_WSDL = 'https://testservice.postnl.com/CIF_SB/TimeframeWebService/2_0/?wsdl';

    /**
     * @var array $classes
     *     The complex types used by this client.
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
        'TimeframeTimeFrame'
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
