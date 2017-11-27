<?php

namespace OSPSB\src\patterns\adapter\book\Entity;

use OSPSB\src\patterns\adapter\book\Interfaces\BookInterface;
use OSPSB\src\patterns\adapter\book\Interfaces\EBookInterface;

class EBookAdapter implements BookInterface
{
    protected $ebook;

    public function __construct(EBookInterface $ebook)
    {
        $this->ebook = $ebook;
    }

    public function open()
    {
        $this->ebook->turnOn();
    }

    public function turnPage()
    {
        $this->ebook->nextPage();
    }
}
