<?php namespace DivideBV\Postnl\ComplexTypes;

class OpeningHours extends BaseType
{

    /**
     * @var string
     */
    protected $Monday = null;

    /**
     * @var string
     */
    protected $Tuesday = null;

    /**
     * @var string
     */
    protected $Wednesday = null;

    /**
     * @var string
     */
    protected $Thursday = null;

    /**
     * @var string
     */
    protected $Friday = null;

    /**
     * @var string
     */
    protected $Saturday = null;

    /**
     * @var string
     */
    protected $Sunday = null;

    /**
     * @return string
     */
    public function getMonday()
    {
        return $this->Monday;
    }

    /**
     * @param string $Monday
     * @return OpeningHours
     */
    public function setMonday($Monday)
    {
        $this->Monday = (string)$Monday;
        return $this;
    }

    /**
     * @return string
     */
    public function getTuesday()
    {
        return $this->Tuesday;
    }

    /**
     * @param string $Tuesday
     * @return OpeningHours
     */
    public function setTuesday($Tuesday)
    {
        $this->Tuesday = (string)$Tuesday;
        return $this;
    }

    /**
     * @return string
     */
    public function getWednesday()
    {
        return $this->Wednesday;
    }

    /**
     * @param string $Wednesday
     * @return OpeningHours
     */
    public function setWednesday($Wednesday)
    {
        $this->Wednesday = (string)$Wednesday;
        return $this;
    }

    /**
     * @return string
     */
    public function getThursday()
    {
        return $this->Thursday;
    }

    /**
     * @param string $Thursday
     * @return OpeningHours
     */
    public function setThursday($Thursday)
    {
        $this->Thursday = (string)$Thursday;
        return $this;
    }

    /**
     * @return string
     */
    public function getFriday()
    {
        return $this->Friday;
    }

    /**
     * @param string $Friday
     * @return OpeningHours
     */
    public function setFriday($Friday)
    {
        $this->Friday = (string)$Friday;
        return $this;
    }

    /**
     * @return string
     */
    public function getSaturday()
    {
        return $this->Saturday;
    }

    /**
     * @param string $Saturday
     * @return OpeningHours
     */
    public function setSaturday($Saturday)
    {
        $this->Saturday = (string)$Saturday;
        return $this;
    }

    /**
     * @return string
     */
    public function getSunday()
    {
        return $this->Sunday;
    }

    /**
     * @param string $Sunday
     * @return OpeningHours
     */
    public function setSunday($Sunday)
    {
        $this->Sunday = (string)$Sunday;
        return $this;
    }
}
