<?php

namespace OSPSB\src\patterns\observer\user\Service;

use OSPSB\src\patterns\observer\user\Interfaces\ObserverInterface;

class LogObserver implements ObserverInterface
{
    /**
     * @var id
     */
    protected $id;

    /**
     * @param int $id
     */
    public function __construct(int $id)
    {
        $this->id = $id;
    }

    /**
     * @return ObserverInterface
     */
    public function handle() : ObserverInterface
    {
        var_dump('Log into the file event : loggin');

        return $this;
    }

    /**
     * @return int
     */
    public function id() : int
    {
        return $this->id;
    }
}
