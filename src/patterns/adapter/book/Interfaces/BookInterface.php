<?php

namespace OSPSB\src\patterns\adapter\book\Interfaces;

interface BookInterface
{
    /**
     * @return string
     */
    public function open() : string;

    /**
     * @return string
     */
    public function turnPage() : string;
}
