<?php

namespace OSPSB\src\phpFeatures\magicMethods;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    /**
     * @test
     */
    public function user()
    {
        $login    = 'yuri';
        $password = 'passw#2';
        $age      = 99;

        $user = new User;

        $user->login    = $login;
        $user->password = $password;
        $user->age      = $age;

        $this->assertEquals($login, $user->login);
        $this->assertEquals(crypt($password, user::SALT), $user->password);
        $this->assertEquals($age, $user->age);
    }
}
