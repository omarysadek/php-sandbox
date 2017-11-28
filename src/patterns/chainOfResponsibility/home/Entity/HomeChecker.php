<?php

namespace OSPSB\src\patterns\chainOfResponsibility\home\Entity;

use OSPSB\src\patterns\chainOfResponsibility\home\Entity\HomeStatus;

abstract class HomeChecker
{
    /**
     * @var HomeChecker
     */
    protected $isSucceedWith;

    /**
     * @param HomeStatus $homeStatus
     */
    abstract public function check(HomeStatus $homeStatus);

    /**
     * @param HomeChecker $homeChecker
     *
     * @return HomeChecker
     */
    public function isSucceedWith(HomeChecker $homeChecker) : HomeChecker
    {
        $this->isSucceedWith = $homeChecker;

        return $this;
    }

    /**
     * @param HomeStatus $homeStatus
     *
     * @return bool
     */
    public function next(HomeStatus $homeStatus) : bool
    {
        if ($this->isSucceedWith) {
            return $this->isSucceedWith->check($homeStatus);
        }

        return true;
    }
}
