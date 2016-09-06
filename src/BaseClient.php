<?php namespace DivideBV\Postnl;

use SoapClient;

/**
 * Internal functionality common to all clients.
 */
abstract class BaseClient extends SoapClient
{

    /**
     * The URL of the production WSDL. Actual clients must define this.
     */
    const PRODUCTION_WSDL = '';

    /**
     * The URL of the sandbox WSDL. Actual clients must define this.
     */
    const SANDBOX_WSDL = '';

    /**
     * @var array $classes
     *     A list of complex types used to generate a classmap for SoapClient.
     *
     * @see self::getClassmap()
     */
    protected $classes = [];

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
            $wsdl = $sandbox ? static::SANDBOX_WSDL : static::PRODUCTION_WSDL;
        }

        parent::__construct($wsdl, [
            'classmap' => $this->getClassmap(),
            'trace' => true,
            'features' => SOAP_SINGLE_ELEMENT_ARRAYS
        ]);

        $this->__setSoapHeaders($SecurityHeader);
    }

    /**
     * @return array
     *     The classmap generated from self::$classes.
     */
    protected function getClassmap()
    {
        $classmap = [];

        foreach ($this->classes as $class) {
            $classmap[$class] = "DivideBV\\Postnl\\ComplexTypes\\{$class}";
        }

        return $classmap;
    }
}
