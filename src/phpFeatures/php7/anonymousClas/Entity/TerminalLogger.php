<?php

namespace OSPSB\src\phpFeatures\php7\anonymousClas\Entity;

use OSPSB\src\phpFeatures\php7\anonymousClas\Interfaces\Logger;

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
