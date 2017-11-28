<?php

namespace OSPSB\src\patterns\chainOfResponsibility\home\Entity;

use OSPSB\src\patterns\chainOfResponsibility\home\Entity\HomeStatus;

class HomeStatus
{
    /**
     * @var boolean
     */
    protected $locked;

    /**
     * @var boolean
     */
    protected $lightOn;

    /**
     * @var boolean
     */
    protected $alarmOn;

    /**
     * @param boolean $locked
     * @param boolean $lightOn
     * @param boolean $alarmOn
     */
    public function __construct(bool $alarmOn, bool $lightOn, bool $locked)
    {
        $this->locked  = $locked;
        $this->lightOn = $lightOn;
        $this->alarmOn = $alarmOn;
    }

    /**
     * @return boolean
     */
    public function isLocked() : bool
    {
        return $this->locked;
    }

    /**
     * @return boolean
     */
    public function isLightOn() : bool
    {
        return $this->lightOn;
    }

    /**
     * @return boolean
     */
    public function isAlarmOn() : bool
    {
        return $this->alarmOn;
    }
}
