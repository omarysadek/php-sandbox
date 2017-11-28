<?php

namespace OSPSB\src\patterns\chainOfResponsibility\home\Entity;

use \Exception;

use OSPSB\src\patterns\chainOfResponsibility\home\Entity\HomeStatus;
use OSPSB\src\patterns\chainOfResponsibility\home\Entity\HomeChecker;

class Alarm extends HomeChecker
{
    /**
     * @param HomeStatus $homeStatus
     *
     * @return bool
     */
    public function check(HomeStatus $homeStatus) : bool
    {
        if (!$homeStatus->isAlarmOn()) {
            throw new Exception('Alarm is off, abord!!!!');
        }

        return $this->next($homeStatus);
    }
}
