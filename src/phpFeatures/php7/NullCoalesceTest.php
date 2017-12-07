<?php

namespace OSPSB\src\phpFeatures\php7;

use PHPUnit\Framework\TestCase;

class NullCoalesceTest extends TestCase
{
    /**
     * @test
     */
    public function testing()
    {
        $name = 'Omar';
        $lastName = 'SADEK';

        $value = $_GET['name'] ?? $name;
        $this->assertEquals($name, $value);

        $_GET['lastName'] = $lastName;
        $value = $_GET['lastName'] ?? 'noName';
        $this->assertEquals($lastName, $value);
    }
}
