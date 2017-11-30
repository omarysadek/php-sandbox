<?php

namespace OSPSB\src\patterns\strategizing\user\Tests;

use PHPUnit\Framework\TestCase;

use OSPSB\src\patterns\strategizing\user\Services\AdminRegistration;
use OSPSB\src\patterns\strategizing\user\Services\VipRegistration;
use OSPSB\src\patterns\strategizing\user\Services\DefaultRegistration;
use OSPSB\src\patterns\strategizing\user\Services\RegistrationFactory;

class UserTest extends TestCase
{
    /**
     * @test
     * @group userTest
     */
    public function userTest()
    {
        $this->assertTrue(
            (RegistrationFactory::get('god') instanceof AdminRegistration)
        );

        $this->assertTrue(
            (RegistrationFactory::get('vip') instanceof VipRegistration)
        );

        $this->assertTrue(
            (RegistrationFactory::get() instanceof DefaultRegistration)
        );

        //echo RegistrationFactory::get('god')->handle('Kinovy')->info();
        //echo RegistrationFactory::get('vip')->handle('Keynge')->info();
        //echo RegistrationFactory::get()->handle('You')->info();
    }
}
