<?php

namespace OSPSB\src\patterns\decorator\car\Entity;

use OSPSB\src\patterns\decorator\car\Interfaces\CarServiceInterface;

class GlassRepair implements CarServiceInterface
{
    const COST = 20;
    const DESCRIPTION = ', and glass repair';

    /**
     * @var CarServiceInterface
     */
    protected $carService;

    /**
     * @param CarServiceInterface $carService
     */
    public function __construct(CarServiceInterface $carService)
    {
        $this->carService = $carService;
    }

    /**
     * @return int
     */
    public function getCost() : int
    {
        return $this->carService->getCost() + self::COST;
    }

    /**
     * @return string
     */
    public function getDescription() : string
    {
        return $this->carService->getDescription() . self::DESCRIPTION;
    }
}
