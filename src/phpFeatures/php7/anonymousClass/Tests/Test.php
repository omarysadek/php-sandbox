<?php

namespace OSPSB\src\phpFeatures\php7\anonymousClas\Tests;

use PHPUnit\Framework\TestCase;

use OSPSB\src\phpFeatures\php7\anonymousClass\Interfaces\Logger;
use OSPSB\src\phpFeatures\php7\anonymousClass\Entity\TerminalLogger;
use OSPSB\src\phpFeatures\php7\anonymousClass\Entity\Application;

class Test extends TestCase
{
    /**
     * @test
     */
    public function testing()
    {
        $action = 'start';

        $application = new Application(new TerminalLogger());
        $returnedValue = $application->action($action);

        $this->assertEquals($action, $returnedValue);

        $returnedValue = (
            new Application(new class implements Logger
            {
                public function log($message)
                {
                    return $message;
                }
            })
        )->action($action);
        $this->assertEquals($action, $returnedValue);
    }
}
