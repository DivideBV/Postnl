<?php namespace DivideBV\Postnl\ComplexTypes;

class Dimension extends BaseType
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
     * @param string $Weight
     * @param string $Height Optional.
     * @param string $Length Optional.
     * @param string $Volume Optional.
     * @param string $Width Optional.
     */
    public function __construct($Weight, $Height = null, $Length = null, $Volume = null, $Width = null)
    {
        $this->setWeight($Weight);

        // Optional parameters.
        $this->setHeight($Height);
        $this->setLength($Length);
        $this->setVolume($Volume);
        $this->setWidth($Width);
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
