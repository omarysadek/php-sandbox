<?php

namespace OSPSB\src\patterns\chainOfResponsibility\home\Entity;

use \Exception;

use OSPSB\src\patterns\chainOfResponsibility\home\Entity\HomeStatus;
use OSPSB\src\patterns\chainOfResponsibility\home\Entity\HomeChecker;

class Light extends HomeChecker
{
    /**
     * @param HomeStatus $homeStatus
     *
     * @return bool
     */
    public function check(HomeStatus $homeStatus) : bool
    {
        if ($homeStatus->isLightOn()) {
            throw new Exception('Light is On, abord!!!!');
        }

        return $this->next($homeStatus);
    }
}
