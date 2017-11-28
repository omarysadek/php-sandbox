<?php

namespace OSPSB\src\patterns\chainOfResponsibility\home\Entity;

use \Exception;

use OSPSB\src\patterns\chainOfResponsibility\home\Entity\HomeStatus;
use OSPSB\src\patterns\chainOfResponsibility\home\Entity\HomeChecker;

class Lock extends HomeChecker
{
    /**
     * @param HomeStatus $homeStatus
     *
     * @return bool
     */
    public function check(HomeStatus $homeStatus) : bool
    {
        if (!$homeStatus->isLocked()) {
            throw new Exception('Home not Locked, abord!!!!');
        }

        return $this->next($homeStatus);
    }
}
