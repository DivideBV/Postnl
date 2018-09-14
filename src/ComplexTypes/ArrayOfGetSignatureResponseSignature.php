<?php namespace DivideBV\Postnl\ComplexTypes;

class ArrayOfGetSignatureResponseSignature extends BaseArrayOfType
{

    /**
     * @var string The name of the array property this class is a wrapper of.
     */
    const WRAPPED_PROPERTY = 'GetSignatureResponseSignature';

    /**
     * @var GetSignatureResponseSignature[]
     */
    protected $GetSignatureResponseSignature = null;

    /**
     * @param GetSignatureResponseSignature[] $GetSignatureResponseSignature
     */
    public function __construct(array $GetSignatureResponseSignature)
    {
        $this->getGetSignatureResponseSignature($GetSignatureResponseSignature);
    }

    /**
     * @return GetSignatureResponseSignature[]
     */
    public function getGetSignatureResponseSignature()
    {
        return $this->GetSignatureResponseSignature;
    }

    /**
     * @param GetSignatureResponseSignature[] $GetSignatureResponseSignature
     * @return ArrayOfGetSignatureResponseSignature
     */
    public function setGetSignatureResponseSignature(array $GetSignatureResponseSignature)
    {
        $this->GetSignatureResponseSignature = $GetSignatureResponseSignature;
        return $this;
    }
}
