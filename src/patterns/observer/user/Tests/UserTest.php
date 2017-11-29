<?php

namespace OSPSB\src\patterns\observer\user\Tests;

use PHPUnit\Framework\TestCase;

use OSPSB\src\patterns\observer\user\Entity\User;

class UserTest extends TestCase
{
    /**
     * @test
     * @group UserTest
     */
    public function userTest()
    {
        $logObserverProphecy =
            $this->prophesize('OSPSB\src\patterns\observer\user\Service\LogObserver');

        $logObserverProphecy->handle()->shouldBeCalled();
        $logObserverProphecy->id()->willReturn(0);
        $user = new User($logObserverProphecy->reveal());
        $user->logIn();
    }
}
