<?php

namespace OSPSB\src\phpFeatures\php7\anonymousClass\Entity;

use OSPSB\src\phpFeatures\php7\anonymousClass\Interfaces\Logger;

class TerminalLogger implements Logger
{
    /**
     * @param string $message
     *
     * @return string
     */
    public function log($message)
    {
        return $message;
    }
}
