<?php

namespace OSPSB\src\phpFeatures\php7\anonymousClas\Interfaces;

interface Logger
{
    /**
     * @param string $message
     *
     * @return string
     */
    public function log($message);
}
