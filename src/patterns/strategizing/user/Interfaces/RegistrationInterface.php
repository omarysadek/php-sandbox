<?php

namespace OSPSB\src\patterns\strategizing\user\Interfaces;

use OSPSB\src\patterns\strategizing\user\Entity\User;

interface RegistrationInterface
{
    public function handle($name) : User;
}
