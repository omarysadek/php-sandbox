<?php

namespace OSPSB\src\patterns\adapter\book\Entity;

use OSPSB\src\patterns\adapter\book\Interfaces\EBookInterface;

class Kindle implements EBookInterface
{
    /**
     * @return string
     */
    public function turnOn() : string
    {
        return "Starting the device...";
    }

    /**
     * @return string
     */
    public function nextPage() : string
    {
        return "Turning the page...";
    }
}
