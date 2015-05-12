<?php namespace DivideBV\Postnl\ComplexTypes;

class Dimension
{

    /**
     * @var string $Height
     */
    protected $Height = null;

    /**
     * @var string $Length
     */
    protected $Length = null;

    /**
     * @var string $Volume
     */
    protected $Volume = null;

    /**
     * @var string $Weight
     */
    protected $Weight = null;

    /**
     * @var string $Width
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
     * @return Dimension
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
     * @return Dimension
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
     * @return Dimension
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
     * @return Dimension
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
     * @return Dimension
     */
    public function setWidth($Width)
    {
        $this->Width = $Width;
        return $this;
    }
}
