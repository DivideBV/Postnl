<?php namespace DivideBV\Postnl\ComplexTypes;

use SoapHeader;
use SoapVar;

class SecurityHeader extends SoapHeader
{

    /**
     *
     */
    const XMLNS = 'http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-secext-1.0.xsd';

    /**
     * @param string $username
     * @param string $password
     */
    public function __construct($username, $password)
    {
        $username = new SoapVar($username, XSD_STRING, null, null, 'Username', self::XMLNS);
        $password = new SoapVar(sha1($password), XSD_STRING, null, null, 'Password', self::XMLNS);

        $usernameToken = new SoapVar([$username, $password], SOAP_ENC_OBJECT, null, null, 'UsernameToken', self::XMLNS);
        $security = new SoapVar([$usernameToken], SOAP_ENC_OBJECT, null, null, 'Security', self::XMLNS);

        parent::__construct(self::XMLNS, 'Security', $security);
    }

}
