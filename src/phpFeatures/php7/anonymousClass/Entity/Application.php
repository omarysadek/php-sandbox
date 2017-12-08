<?php

namespace OSPSB\src\phpFeatures\php7\anonymousClass\Entity;

use OSPSB\src\phpFeatures\php7\anonymousClass\Interfaces\Logger;

class Application
{
    /**
     * @var Logger
     */
    protected $logger;

    /**
     * @param Logger $logger
     */
    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }

    /**
     * @param string $message
     *
     * @return string
     */
    public function action(string $message) : string
    {
        return $this->logger->log($message);
    }
}
