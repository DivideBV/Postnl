<?php namespace DivideBV\Postnl;

use SoapClient;

/**
 *
 */
class Postnl
{
    public function __construct()
    {
        $this->client = new \SoapClient('https://testservice.postnl.com/CIF_SB/BarcodeWebService/1_1/?wsdl');
        $this->client
    }
}
