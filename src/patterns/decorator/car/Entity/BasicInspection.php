<?php

namespace OSPSB\src\patterns\decorator\car\Entity;

use OSPSB\src\patterns\decorator\car\Interfaces\CarServiceInterface;

class BasicInspection implements CarServiceInterface
{
    const COST = 15;
    const DESCRIPTION = 'Basic inspection';

    /**
     * @return int
     */
    public function getCost() : int
    {
        return self::COST;
    }

    /**
     * @return string
     */
    public function getDescription() : string
    {
        return self::DESCRIPTION;
    }
}
