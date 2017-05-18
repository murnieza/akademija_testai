<?php

namespace AppBundle\Service;

class LocalCalculator
{
    /**
     * @var ApiCalculator
     */
    private $apiCalculator;

    /**
     * @param ApiCalculator $apiCalculator
     */
    public function __construct(ApiCalculator $apiCalculator)
    {
        $this->apiCalculator = $apiCalculator;
    }

    /**
     * @param $operandA
     * @param $operandB
     * @param $action
     *
     * @return float|int
     */
    public function calculate($operandA, $operandB, $action)
    {
        switch ($action) {
            case '+':
                return $operandA + $operandB;
            case '-':
                return $operandA - $operandB;
            case '*':
                return $operandA * $operandB;
            case '/':
                return $operandA / $operandB;
            default:
                return $this->apiCalculator->calculate($operandA, $operandB, $action);
        }
    }
}
