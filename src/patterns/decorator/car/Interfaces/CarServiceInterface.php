<?php

namespace OSPSB\src\patterns\decorator\car\Interfaces;

interface CarServiceInterface
{
    /**
     * @return int
     */
    public function getCost() : int;

    /**
     * @return string
     */
    public function getDescription() : string;
}
