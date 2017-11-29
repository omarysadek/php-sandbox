<?php

namespace OSPSB\src\patterns\observer\user\Interfaces;

interface ObserverInterface
{
    /**
     * @return ObserverInterface
     */
    public function handle() : ObserverInterface;

    /**
     * @return int
     */
    public function id() : int;
}
