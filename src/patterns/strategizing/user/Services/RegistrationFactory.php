<?php

namespace OSPSB\src\patterns\strategizing\user\Services;

use OSPSB\src\patterns\strategizing\user\Interfaces\RegistrationInterface;

abstract class RegistrationFactory
{
    public static function get($type = null) : RegistrationInterface
    {
        if ($type == 'god') {
            return new AdminRegistration();
        }

        if ($type == 'vip') {
            return new VipRegistration();
        }

        return new DefaultRegistration();
    }
}
