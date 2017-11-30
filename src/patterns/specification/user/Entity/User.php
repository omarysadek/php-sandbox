<?php

namespace OSPSB\src\patterns\specification\user\Entity;

class User
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $type;

    /**
     * @param string $name
     * @param string $type
     */
    public function __construct(string $name, string $type)
    {
        $this->name = $name;
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function type() : string
    {
        return $this->type;
    }
}
