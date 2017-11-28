<?php

namespace OSPSB\src\patterns\adapter\book\Interfaces;

interface EBookInterface
{
    /**
     * @return string
     */
    public function turnOn() : string;

    /**
     * @return string
     */
    public function nextPage() : string;
}
