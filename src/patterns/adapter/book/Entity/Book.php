<?php

namespace OSPSB\src\patterns\adapter\book\Entity;

use OSPSB\src\patterns\adapter\book\Interfaces\BookInterface;

class Book implements BookInterface
{
    public function open()
    {
        return "Opening the book";
    }

    public function turnPage()
    {
        return "Turning the page";
    }
}
