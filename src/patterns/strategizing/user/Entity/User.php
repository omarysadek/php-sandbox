<?php

namespace OSPSB\src\patterns\strategizing\user\Entity;

class User
{
    protected $name;

    protected $type;

    public function __construct(string $name, string $type)
    {
        $this->name = $name;
        $this->type = $type;
    }

    public function info() : string
    {
        return $this->name . ' is ' . $this->type;
    }
}
