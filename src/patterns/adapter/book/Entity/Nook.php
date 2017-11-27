<?php

namespace OSPSB\src\patterns\adapter\book\Entity;

use OSPSB\src\patterns\adapter\book\Interfaces\EBookInterface;

class Nook implements EBookInterface
{
    public function turnOn()
    {
        return "Nook:starting the device...";
    }

    public function nextPage()
    {
        return "Nook:turning the page...";
    }
}
