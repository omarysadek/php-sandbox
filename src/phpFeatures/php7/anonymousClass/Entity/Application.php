<?php


namespace OSPSB\src\phpFeatures\php7\anonymousClas\Entity;

use OSPSB\src\phpFeatures\php7\anonymousClas\Interfaces\Logger;

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
