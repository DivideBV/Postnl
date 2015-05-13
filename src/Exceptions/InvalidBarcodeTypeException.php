<?php namespace DivideBV\Postnl\Exceptions;

use Exception;

class InvalidBarcodeTypeException extends Exception
{

    /**
     * @param mixed $type
     */
    public function __construct($type)
    {
        parent::__construct("'{$type}' is not a valid barcode type.");
    }
}
