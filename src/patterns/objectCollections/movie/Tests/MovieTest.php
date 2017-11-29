<?php

namespace OSPSB\src\patterns\objectCollections\movie\Tests;

use PHPUnit\Framework\TestCase;

use OSPSB\src\patterns\objectCollections\movie\Entity\MovieCollection;
use OSPSB\src\patterns\objectCollections\movie\Entity\Movie;

class MovieTest extends TestCase
{
    /**
     * @test
     * @group MovieTest
     */
    public function movieTest()
    {
        $movieName1 = 'Leon';
        $movieName2 = 'American History X';
        $movieName3 = 'Lord Of War';

        $movies = new MovieCollection([new Movie($movieName2), new Movie($movieName3)]);
        $movies->add(new Movie($movieName1));

        $expectedMovieNames = [$movieName2, $movieName3, $movieName1];
        $this->assertEquals($expectedMovieNames, $movies->titles());
    }
}
