<?php

namespace OSPSB\src\patterns\adapter\book\Entity;

use OSPSB\src\patterns\adapter\book\Interfaces\BookInterface;
use OSPSB\src\patterns\adapter\book\Interfaces\EBookInterface;

class EBookAdapter implements BookInterface
{
    /**
     * @var EBookInterface
     */
    protected $ebook;

    /**
     * @param EBookInterface $ebook
     */
    public function __construct(EBookInterface $ebook)
    {
        $this->ebook = $ebook;
    }

    /**
     * @return string
     */
    public function open() : string
    {
        return $this->ebook->turnOn();
    }

    /**
     * @return string
     */
    public function turnPage() : string
    {
        return $this->ebook->nextPage();
    }
}
