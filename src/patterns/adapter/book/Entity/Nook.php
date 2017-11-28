<?php

namespace OSPSB\src\patterns\adapter\book\Entity;

use OSPSB\src\patterns\adapter\book\Interfaces\EBookInterface;

class Nook implements EBookInterface
{
    /**
     * @return string
     */
    public function turnOn() : string
    {
        return "Nook:starting the device...";
    }

    /**
     * @return string
     */
    public function nextPage() : string
    {
        return "Nook:turning the page...";
    }
}
