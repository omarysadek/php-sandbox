<?php

namespace OSPSB\src\patterns\specification\user\Tests;

use PHPUnit\Framework\TestCase;

use OSPSB\src\patterns\specification\user\Entity\GodUser;
use OSPSB\src\patterns\specification\user\Entity\HumanUser;
use OSPSB\src\patterns\specification\user\Entity\User;
use OSPSB\src\patterns\specification\user\Repository\UserRepository;

class UserTest extends TestCase
{
    /**
     * @test
     * @group userTest
     */
    public function userTest()
    {
        $users = new UserRepository([
            new User('notYou', 'god'),
            new User('you', 'human'),
            new User('random', 'human')
        ]);

        $godUsers = $users->getBy(new GodUser);
        $humanUsers = $users->getBy(new HumanUser);

        $this->assertEquals(2, sizeof($humanUsers));
        $this->assertEquals(1, sizeof($godUsers));
    }
}
