<?php

namespace Tests\AppBundle\Service;

use AppBundle\Service\ApiCalculator;
use AppBundle\Service\LocalCalculator;

class LocalCalculatorTest extends \PHPUnit_Framework_TestCase
{
    public function getTestCalculateData()
    {
        return [
            [5, 2, 3, '+'],
            [-1, 2, 3, '-'],
            [-1, 2, 3, '-'],
            [-1, 2, 3, '-'],
            [-1, 2, 3, '-'],
            [-1, 2, 3, '-'],
            [-1, 2, 3, '-'],
            [-1, 2, 3, '-'],
            [-1, 2, 3, '-'],
            [-1, 2, 3, '-'],
            [-1, 2, 3, '-'],
            [-1, 2, 3, '-'],
            [-1, 2, 3, '-'],
            [-1, 2, 3, '-'],
            [-1, 2, 3, '-'],
            [-1, 2, 3, '-'],
            [-1, 2, 3, '-'],
            [-1, 2, 3, '-'],
            [-1, 2, 3, '-'],
            ['Antradienis', 2, 3, '%'],
        ];
    }

    /**
     * @dataProvider getTestCalculateData
     */
    public function testCalculate($expected, $a, $b, $operation)
    {
        $innerCalculatorMock = $this
            ->getMockBuilder('AppBundle\Service\ApiCalculator')
            ->disableOriginalConstructor()
            ->getMock();

        $innerCalculatorMock
            ->method('calculate')
            ->willReturn('Antradienis');

        $calculator = new LocalCalculator($innerCalculatorMock);

        $this->assertEquals(
            $expected,
            $calculator->calculate($a, $b, $operation)
        );
    }
}
