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
     * @param string $apikey
     *     The authorization API key.
     * @param bool $sandbox
     *     Whether to use the production or sandbox environment. Defaults to
     *     production.
     * @param string $wsdl
     *     The URL of the WSDL file to use, if not production or sandbox.
     */
    public function __construct($apikey, $sandbox = false, $wsdl = null)
    {
        // If no WSDL is provided, use either the sandbox or production WSDL.
        if (!$wsdl) {
            $wsdl = $sandbox ? static::SANDBOX_WSDL : static::PRODUCTION_WSDL;
        }

        parent::__construct($wsdl, [
            'classmap' => $this->getClassmap(),
            'trace' => true,
            'stream_context' => stream_context_create([
                'http' => [
                    'header' => "apikey: $apikey"
                ],
            ]),
        ]);
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
