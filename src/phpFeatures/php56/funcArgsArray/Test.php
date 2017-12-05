<?php

namespace OSPSB\src\phpFeatures\php56\funcArgsArray;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function testing()
    {
        $data = Learning::getAnyArg('test', 'first', 'second');
        $this->assertTrue(is_array($data));
        $this->assertTrue(is_array(Learning::getAnyArgOld('test', 'first', 'second')));

        $this->assertEquals(
            ['test', 'first', 'second'],
            $data
        );
    }
}
