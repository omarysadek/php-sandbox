<?php

namespace OSPSB\src\phpFeatures\php7\spaceships\Entity;

class User
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var int
     */
    protected $age;

    /**
     * @param string $name
     * @param int    $age
     */
    public function __construct(string $name, int $age)
    {
        $this->name = $name;
        $this->age  = $age;
    }

    /**
     * @return string
     */
    public function name() : string
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function age() : int
    {
        return $this->age;
    }

    /**
     * @return boolean
     */
    public function isBigboy() : bool
    {
        return ($this->age > 17) ? true : false;
    }
}
