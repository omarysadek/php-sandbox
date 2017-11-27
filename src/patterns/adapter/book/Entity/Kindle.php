<?php

namespace OSPSB\src\patterns\adapter\book\Entity;

use OSPSB\src\patterns\adapter\book\Interfaces\EBookInterface;

class Kindle implements EBookInterface
{
    public function turnOn()
    {
        return "Starting the device...";
    }

    public function nextPage()
    {
        return "Turning the page...";
    }
}
