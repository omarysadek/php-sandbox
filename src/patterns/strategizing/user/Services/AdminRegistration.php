<?php

namespace OSPSB\src\patterns\strategizing\user\Services;

use OSPSB\src\patterns\strategizing\user\Interfaces\RegistrationInterface;
use OSPSB\src\patterns\strategizing\user\Entity\User;

class AdminRegistration implements RegistrationInterface
{
    public function handle($name) : User
    {
        return new User($name, 'GOD');
    }
}
