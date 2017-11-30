<?php

namespace OSPSB\src\patterns\template_method\soda\Tests;

use PHPUnit\Framework\TestCase;

use OSPSB\src\patterns\template_method\soda\Entity\CocaCola;
use OSPSB\src\patterns\template_method\soda\Entity\Fanta;

class SodaTest extends TestCase
{
    /**
     * @test
     * @group sodaTest
     */
    public function sodaTest()
    {
        $this->assertEquals(CocaCola::SUBSTANCE, (new CocaCola())->make()->getMainSubstance());
        $this->assertEquals(Fanta::SUBSTANCE, (new Fanta())->make()->getMainSubstance());
    }
}
