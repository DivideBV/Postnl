<?php namespace DivideBV\Postnl;

use SoapClient;
use DOMDocument;

/**
 * Client class for CIF's confirming service.
 */
class ConfirmingClient extends SoapClient
{

    /**
     * The URL of the production WSDL.
     */
    const PRODUCTION_WSDL = 'https://service.postnl.com/CIF/ConfirmingWebService/1_7/?wsdl';

    /**
     * The URL of the sandbox WSDL.
     */
    const SANDBOX_WSDL = 'https://testservice.postnl.com/CIF_SB/ConfirmingWebService/1_7/?wsdl';

    /**
     * @var array $classmap
     *     The classes representing the complex types.
     */
    protected $classmap = array (
        'ConfirmingMessage' => 'DivideBV\\Postnl\\ComplexTypes\\ConfirmingMessage',
        'Customer' => 'DivideBV\\Postnl\\ComplexTypes\\Customer',
        'Address' => 'DivideBV\\Postnl\\ComplexTypes\\Address',
        'Message' => 'DivideBV\\Postnl\\ComplexTypes\\Message',
        'ArrayOfShipment' => 'DivideBV\\Postnl\\ComplexTypes\\ArrayOfShipment',
        'Shipment' => 'DivideBV\\Postnl\\ComplexTypes\\Shipment',
        'ArrayOfAddress' => 'DivideBV\\Postnl\\ComplexTypes\\ArrayOfAddress',
        'ArrayOfAmount' => 'DivideBV\\Postnl\\ComplexTypes\\ArrayOfAmount',
        'Amount' => 'DivideBV\\Postnl\\ComplexTypes\\Amount',
        'ArrayOfContact' => 'DivideBV\\Postnl\\ComplexTypes\\ArrayOfContact',
        'Contact' => 'DivideBV\\Postnl\\ComplexTypes\\Contact',
        'Customs' => 'DivideBV\\Postnl\\ComplexTypes\\Customs',
        'ArrayOfContent' => 'DivideBV\\Postnl\\ComplexTypes\\ArrayOfContent',
        'Content' => 'DivideBV\\Postnl\\ComplexTypes\\Content',
        'Dimension' => 'DivideBV\\Postnl\\ComplexTypes\\Dimension',
        'ArrayOfGroup' => 'DivideBV\\Postnl\\ComplexTypes\\ArrayOfGroup',
        'Group' => 'DivideBV\\Postnl\\ComplexTypes\\Group',
        'ArrayOfProductOption' => 'DivideBV\\Postnl\\ComplexTypes\\ArrayOfProductOption',
        'ProductOption' => 'DivideBV\\Postnl\\ComplexTypes\\ProductOption',
        'ArrayOfConfirmingResponseShipment' => 'DivideBV\\Postnl\\ComplexTypes\\ArrayOfConfirmingResponseShipment',
        'ConfirmingResponseShipment' => 'DivideBV\\Postnl\\ComplexTypes\\ConfirmingResponseShipment',
        'ArrayOfWarning' => 'DivideBV\\Postnl\\ComplexTypes\\ArrayOfWarning',
        'Warning' => 'DivideBV\\Postnl\\ComplexTypes\\Warning',
        'CifException' => 'DivideBV\\Postnl\\ComplexTypes\\CifException',
        'ArrayOfExceptionData' => 'DivideBV\\Postnl\\ComplexTypes\\ArrayOfExceptionData',
        'ExceptionData' => 'DivideBV\\Postnl\\ComplexTypes\\ExceptionData',
    );

    /**
     * @param ComplexTypes\SecurityHeader $SecurityHeader
     *     The authorization information.
     * @param bool $sandbox
     *     Whether to use the production or sandbox environment. Defaults to
     *     production.
     * @param string $wsdl
     *     The URL of the WSDL file to use, if not production or sandbox.
     */
    public function __construct(ComplexTypes\SecurityHeader $SecurityHeader, $sandbox = false, $wsdl = null)
    {
        // If no WSDL is provided, use either the sandbox or production WSDL.
        if (!$wsdl) {
            $wsdl = $sandbox ? self::SANDBOX_WSDL : self::PRODUCTION_WSDL;
        }

        parent::__construct($wsdl, ['classmap' => $this->classmap, 'trace' => true]);

        $this->__setSoapHeaders($SecurityHeader);
    }

    /**
     * @param ConfirmingMessage $Confirming
     * @return ArrayOfConfirmingResponseShipment
     */
    public function confirming(ComplexTypes\ConfirmingMessage $Confirming)
    {
        return $this->__soapCall('Confirming', [$Confirming]);
    }
}
