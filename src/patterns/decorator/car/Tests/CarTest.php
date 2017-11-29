<?php

namespace OSPSB\src\patterns\decorator\car\Tests;

use PHPUnit\Framework\TestCase;

use OSPSB\src\patterns\decorator\car\Entity\BasicInspection;
use OSPSB\src\patterns\decorator\car\Entity\GlassRepair;
use OSPSB\src\patterns\decorator\car\Entity\OilChange;

class CarTest extends TestCase
{
    /**
     * @test
     * @group CarTest
     */
    public function carTest()
    {
        $carService = new OilChange(new GlassRepair(new BasicInspection()));

        $expectCost = OilChange::COST + GlassRepair::COST + BasicInspection::COST;
        $this->assertEquals($expectCost, $carService->getCost());

        $expectDescription = BasicInspection::DESCRIPTION .
            GlassRepair::DESCRIPTION .
            OilChange::DESCRIPTION;
        $this->assertEquals($expectDescription, $carService->getDescription());
    }
}
