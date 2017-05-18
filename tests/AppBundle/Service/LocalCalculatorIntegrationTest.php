<?php

namespace Tests\AppBundle\Service;

use AppBundle\Service\ApiCalculator;
use AppBundle\Service\LocalCalculator;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class LocalCalculatorIntegrationTest extends WebTestCase
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
        ];
    }

    /**
     * @dataProvider getTestCalculateData
     */
    public function testCalculate($expected, $a, $b, $operation)
    {
        $container = self::createClient()->getContainer();

        $calculator = $container->get('app.calculator');

        $this->assertEquals(
            $expected,
            $calculator->calculate($a, $b, $operation)
        );
    }
}
