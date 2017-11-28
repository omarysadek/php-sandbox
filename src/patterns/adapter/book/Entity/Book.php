<?php

namespace OSPSB\src\patterns\adapter\book\Entity;

use OSPSB\src\patterns\adapter\book\Interfaces\BookInterface;

class Book implements BookInterface
{
    /**
     * @return string
     */
    public function open() : string
    {
        return "Opening the book";
    }

    /**
     * @return string
     */
    public function turnPage() : string
    {
        return "Turning the page";
    }
}
