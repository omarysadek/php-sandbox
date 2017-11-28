<?php

namespace OSPSB\src\patterns\chainOfResponsibility\home\Tests;

use PHPUnit\Framework\TestCase;
use \Exception;

use OSPSB\src\patterns\chainOfResponsibility\home\Entity\HomeStatus;
use OSPSB\src\patterns\chainOfResponsibility\home\Entity\Alarm;
use OSPSB\src\patterns\chainOfResponsibility\home\Entity\Light;
use OSPSB\src\patterns\chainOfResponsibility\home\Entity\Lock;

class HomeTest extends TestCase
{
    /**
     * @test
     * @group HomeTest
     * @dataProvider homeProvider
     */
    public function home(
        bool $alarmOn,
        bool $lightOn,
        bool $locked,
        bool $throwException
    ) {
        $homeStatus = new HomeStatus($alarmOn, $lightOn, $locked);

        $alarm = new Alarm;
        $light = new Light;
        $lock  = new Lock;

        $lock->isSucceedWith($light);
        $light->isSucceedWith($alarm);

        if ($throwException) {
            $this->expectException(Exception::class);
        }

        $expectResult = ($throwException) ? null : true;
        $result = $lock->check($homeStatus);

        $this->assertEquals($expectResult, $result);
    }

    public function homeProvider()
    {
        return [
            [
                'alarmOn'        => true,
                'lightOn'        => false,
                'locked'         => true,
                'throwException' => false
            ],
            [
                'alarmOn'        => false,
                'lightOn'        => false,
                'locked'         => true,
                'throwException' => true
            ],
            [
                'alarmOn'        => true,
                'lightOn'        => true,
                'locked'         => true,
                'throwException' => true
            ],
            [
                'alarmOn'        => true,
                'lightOn'        => false,
                'locked'         => false,
                'throwException' => true
            ]
        ];
    }
}
