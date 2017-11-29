<?php

namespace OSPSB\src\patterns\observer\user\Interfaces;

use OSPSB\src\patterns\observer\user\Interfaces\ObserverInterface;

interface SubjectInterface
{
    /**
     * @param mix $observer array|ObserverInterface
     *
     * @return SubjectInterface
     */
    public function attach($observer) : SubjectInterface;

    /**
     * @param int $observerId
     *
     * @return SubjectInterface
     */
    public function dettach(int $observerId) : SubjectInterface;

    /**
     * @return SubjectInterface
     */
    public function notify() : SubjectInterface;
}
