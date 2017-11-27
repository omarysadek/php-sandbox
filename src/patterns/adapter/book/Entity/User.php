<?php

namespace OSPSB\src\patterns\adapter\book\Entity;

use OSPSB\src\patterns\adapter\book\Interfaces\BookInterface;

abstract class User
{
    public static function read(BookInterface $book)
    {
        $book->open();
        $book->turnPage();
    }
}
