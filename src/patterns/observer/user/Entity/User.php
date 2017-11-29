<?php

namespace OSPSB\src\patterns\observer\user\Entity;

use OSPSB\src\patterns\observer\user\Interfaces\SubjectInterface;
use OSPSB\src\patterns\observer\user\Interfaces\ObserverInterface;

class User implements SubjectInterface
{
    /**
     * @var array
     */
    protected $observers = [];

    /**
     * @param ObserverInterface $observer
     */
    public function __construct(ObserverInterface $observer)
    {
        $this->attach($observer);
    }

    /**
     * @param mix $observer array|ObserverInterface
     *
     * @return User
     */
    public function attach($observer) : SubjectInterface
    {
        if ($observer instanceof ObserverInterface) {
            $this->observers[$observer->id()] = $observer;
        }

        if (is_array($observer)) {
            array_map(function ($observer) {
                $this->attach($observer);
            }, $observer);
        }

        return $this;
    }

    /**
     * @param id $observerId
     *
     * @return User
     */
    public function dettach(int $observerId) : SubjectInterface
    {
        if (isset($this->observer[$observerId])) {
            unset($this->observer[$observerId]);
        }
    }

    /**
     * @return User
     */
    public function notify() : SubjectInterface
    {
        array_map(function ($observer) {
            $observer->handle();
        }, $this->observers);
        return $this;
    }

    public function logIn() : User
    {
        return $this->notify();
    }
}
