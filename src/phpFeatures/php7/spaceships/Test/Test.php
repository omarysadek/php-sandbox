<?php

namespace OSPSB\src\phpFeatures\php7\spaceships\Test;

use PHPUnit\Framework\TestCase;

use OSPSB\src\phpFeatures\php7\spaceships\Entity\User;
use OSPSB\src\phpFeatures\php7\spaceships\Entity\UserCollection;

class Test extends TestCase
{
    /**
     * @test
     * @dataProvider dataProvider
     */
    public function testing($sortBy, $shouldReturn)
    {
        $collections = new UserCollection(
            new User('Omar', 26),
            new User('Jafar', 11),
            new User('Maisan', 8),
            new User('Yahia', 50)
        );

        $returnedValued = $collections->sortBy($sortBy)->print();
        $this->assertEquals($shouldReturn, $returnedValued);
    }

    public function dataProvider()
    {
        return [
            [
                'sortBy' => 'name',
                'shouldReturn' => [
                    0 => ['Jafar' => 11],
                    1 => ['Maisan' => 8],
                    2 => ['Omar' => 26],
                    3 => ['Yahia' => 50]
                ]
            ],
            [
                'sortBy' => 'age',
                'shouldReturn' => [
                    1 => ['Jafar' => 11],
                    0 => ['Maisan' => 8],
                    2 => ['Omar' => 26],
                    3 => ['Yahia' => 50]
                ]
            ],
        ];
    }
}
