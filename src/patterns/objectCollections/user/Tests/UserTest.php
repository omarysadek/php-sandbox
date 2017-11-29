<?php

namespace OSPSB\src\patterns\objectCollections\user\Tests;

use PHPUnit\Framework\TestCase;

use OSPSB\src\patterns\objectCollections\user\Entity\UserCollections;
use OSPSB\src\patterns\objectCollections\user\Entity\User;

class UserTest extends TestCase
{
    /**
     * @test
     * @group userTest
     */
    public function userTest()
    {
        $name1 = 'Packo';
        $name2 = 'Tristan';

        $expectedNames = [$name1, $name2];
        $userNames = (new UserCollections)->add([new User($name1), new User($name2)])->names();

        $this->assertEquals($expectedNames, $userNames);
    }
}
