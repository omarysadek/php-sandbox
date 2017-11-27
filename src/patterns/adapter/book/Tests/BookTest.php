<?php

namespace OSPSB\src\Patterns\adapter\book\Tests;

use PHPUnit\Framework\TestCase;

use OSPSB\src\patterns\adapter\book\Entity\User;
use OSPSB\src\patterns\adapter\book\Entity\EBookAdapter;

class BookTest extends TestCase
{
    /**
     * @test
     * @group BookTest
     */
    public function readBook()
    {
        $bookProphecy = $this->prophesize('OSPSB\src\patterns\adapter\book\Entity\Book');

        $bookProphecy->open()->shouldBeCalled();
        $bookProphecy->turnPage()->shouldBeCalled();

        User::read($bookProphecy->reveal());
    }

    /**
     * @test
     * @group BookTest
     */
    public function readNook()
    {
        $nookProphecy = $this->prophesize('OSPSB\src\patterns\adapter\book\Entity\Nook');

        $nookProphecy->turnOn()->shouldBeCalled();
        $nookProphecy->nextPage()->shouldBeCalled();

        $eBookAdapter = new EBookAdapter($nookProphecy->reveal());

        User::read($eBookAdapter);
    }

    /**
     * @test
     * @group BookTest
     */
    public function readKindle()
    {
        $kindleProphecy = $this->prophesize('OSPSB\src\patterns\adapter\book\Entity\Kindle');

        $kindleProphecy->turnOn()->shouldBeCalled();
        $kindleProphecy->nextPage()->shouldBeCalled();

        $eBookAdapter = new EBookAdapter($kindleProphecy->reveal());

        User::read($eBookAdapter);
    }
}
