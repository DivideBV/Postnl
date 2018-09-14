<?php namespace DivideBV\Postnl\ComplexTypes;

class ResponseDimension extends BaseType
{

    /**
     * @var string
     */
    protected $Height = null;

    /**
     * @var string
     */
    protected $Length = null;

    /**
     * @var string
     */
    protected $Volume = null;

    /**
     * @var string
     */
    protected $Weight = null;

    /**
     * @var string
     */
    protected $Width = null;

    /**
     * @param string $Height
     * @param string $Length
     * @param string $Volume
     * @param string $Weight
     * @param string $Width
     */
    public function __construct($Height, $Length, $Volume, $Weight, $Width)
    {
        $this->setHeight($Height);
        $this->setLength($Length);
        $this->setVolume($Volume);
        $this->setWeight($Weight);
        $this->setWidth($Width);
    }

    /**
     * @return string
     */
    public function getHeight()
    {
        return $this->Height;
    }

    /**
     * @param string $Height
     * @return ResponseDimension
     */
    public function setHeight($Height)
    {
        $this->Height = $Height;
        return $this;
    }

    /**
     * @return string
     */
    public function getLength()
    {
        return $this->Length;
    }

    /**
     * @param string $Length
     * @return ResponseDimension
     */
    public function setLength($Length)
    {
        $this->Length = $Length;
        return $this;
    }

    /**
     * @return string
     */
    public function getVolume()
    {
        return $this->Volume;
    }

    /**
     * @param string $Volume
     * @return ResponseDimension
     */
    public function setVolume($Volume)
    {
        $this->Volume = $Volume;
        return $this;
    }

    /**
     * @return string
     */
    public function getWeight()
    {
        return $this->Weight;
    }

    /**
     * @param string $Weight
     * @return ResponseDimension
     */
    public function setWeight($Weight)
    {
        $this->Weight = $Weight;
        return $this;
    }

    /**
     * @return string
     */
    public function getWidth()
    {
        return $this->Width;
    }

    /**
     * @param string $Width
     * @return ResponseDimension
     */
    public function setWidth($Width)
    {
        $this->Width = $Width;
        return $this;
    }
}
