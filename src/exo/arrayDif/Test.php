<?php

namespace OSPSB\src\exo\arrayDif;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    /**
     * @test
     * @dataProvider arrayDifProvider
     */
    public function arrayDif($dataX, $dataY)
    {
        $arrayDiff = new ArrayDiff($dataX, $dataY);

        $this->assertEquals([
            '123' => '0',
            '321' => '0'
        ], $arrayDiff->getOnlyX());

        $this->assertEquals([
            '865' => '0',
            '987' => '0'
        ], $arrayDiff->getOnlyY());

        $this->assertEquals([
            '564' => '0',
            '111' => '0'
        ], $arrayDiff->getXAndY());
    }

    public function arrayDifProvider()
    {
        return [
            [
                'dataX' => [
                    '123' => '0',
                    '321' => '0',
                    '564' => '0',
                    '111' => '0'
                ],
                'dataY' => [
                    '564' => '0',
                    '865' => '0',
                    '111' => '0',
                    '987' => '0'
                ]
            ]
        ];
    }
}
