<?php namespace DivideBV\Postnl;

/**
 * This class is a high-level wrapper around the various CIF services.
 */
class Postnl
{

    /**
     * @var BarcodeClient $barcodeClient
     */
    protected $barcodeClient = null;

    /**
     * @param BarcodeClient $barcodeClient
     */
    public function __construct(BarcodeClient $barcodeClient = null)
    {
        $this->barcodeClient = $barcodeClient ?: new BarcodeClient;
    }
}
