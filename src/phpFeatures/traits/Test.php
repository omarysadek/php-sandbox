<?php

namespace OSPSB\src\phpFeatures\traits;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    /**
     * @test
     */
    public function testing()
    {
        $id = 124;
        $user = new User();
        $user->setId($id);

        $this->assertEquals($id, $user->id());
    }
}
