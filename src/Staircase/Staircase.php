<?php

namespace Staircase;

/**
 * Class Staircase
 * @package Staircase
 */
class Staircase
{
    /**
     * @param int $steps
     * @return string
     */
    public function printStaircase(int $steps) : string
    {
        if($steps < 1) throw new \InvalidArgumentException('A staircase should have at least one step');

        $result = '';
        for ($i=1; $i <= $steps; $i++)
        {
            $result.= $this->generateSpaces($steps, $i) .
                      $this->generateSteps($i) .
                      $this->generateEndOfStep($steps, $i);
        }
        return $result;
    }

    /**
     * @param int $steps
     * @param int $i
     * @return string
     */
    private function generateSpaces(int $steps, int $i) : string
    {
        return str_repeat(" ", $steps - $i);
    }

    /**
     * @param int $i
     * @return string
     */
    private function generateSteps(int $i) : string
    {
        return str_repeat('#', $i);
    }

    /**
     * @param int $steps
     * @param int $i
     * @return string
     */
    private function generateEndOfStep(int $steps, int $i) : string
    {
        return $steps == $i ? '' : PHP_EOL;
    }
}