<?php

namespace OSPSB\src\patterns\decorator\car\Entity;

use OSPSB\src\patterns\decorator\car\Interfaces\CarServiceInterface;

class OilChange implements CarServiceInterface
{
    const COST = 5;
    const DESCRIPTION = ', and oil chnage';

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
