<?php

namespace AppBundle\Service;

class ApiCalculator
{
    public function calculate($operandA, $operandB, $action)
    {
        $url = 'https://www.calcatraz.com/calculator/api?c=';

        $operation = null;

        switch ($action) {
            case '^':
                $operation = $operandA . '^' . $operandB;
                break;
            case '!':
                $operation = $operandA . '!';
                break;
        }

        if ($operation) {
            return trim(file_get_contents($url . urlencode($operation)));
        }
    }
}
