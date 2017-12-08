<?php

namespace OSPSB\src\phpFeatures\php7\anonymousClass\Interfaces;

interface Logger
{
    /**
     * @param string $message
     *
     * @return string
     */
    public function log($message);
}
