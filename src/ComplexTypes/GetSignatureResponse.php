<?php namespace DivideBV\Postnl\ComplexTypes;

class GetSignatureResponse extends BaseType
{

    /**
     * @var ArrayOfGetSignatureResponseSignature
     */
    protected $Signature = null;

    /**
     * @var ArrayOfWarning
     */
    protected $Warnings = null;

    /**
     * @param ArrayOfGetSignatureResponseSignature $Signature
     * @param ArrayOfWarning $Warnings
     */
    public function __construct(ArrayOfGetSignatureResponseSignature $Signature, ArrayOfWarning $Warnings)
    {
        $this->setSignature($Signature);
        $this->setWarnings($Warnings);
    }

    /**
     * @return ArrayOfGetSignatureResponseSignature
     */
    public function getSignature()
    {
        return $this->Signature;
    }

    /**
     * @param ArrayOfGetSignatureResponseSignature $Signature
     * @return GetSignatureResponse
     */
    public function setSignature($Signature)
    {
        $this->Signature = $Signature;
        return $this;
    }

    /**
     * @return ArrayOfWarning
     */
    public function getWarnings()
    {
        return $this->Warnings;
    }

    /**
     * @param ArrayOfWarning $Warnings
     * @return GetSignatureResponse
     */
    public function setWarnings($Warnings)
    {
        $this->Warnings = $Warnings;
        return $this;
    }
}
