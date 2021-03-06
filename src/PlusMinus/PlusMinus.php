<?php
namespace PlusMinus;

/**
 * Class PlusMinus
 * @package PlusMinus
 */
class PlusMinus
{
    /**
     * @var int
     */
    private $positiveNumbers = 0;
    /**
     * @var int
     */
    private $zeroNumbers     = 0;
    /**
     * @var int
     */
    private $negativeNumbers = 0;
    /**
     * @var int
     */
    private $totalElements   = 0;

    /**
     * @param $inputArray
     * @return string
     */
    public function parse($inputArray) : string
    {
        $this->totalElements = count($inputArray);

        foreach ($inputArray as $item) {
            if ($this->isPositive($item))
            {
                $this->positiveNumbers++;
            }
            elseif ($this->isNegative($item))
            {
                $this->negativeNumbers++;
            }
            else
            {
                $this->zeroNumbers++;
            }
        }

        return  $this->printOutput();
    }

    /**
     * @return string
     */
    private function printOutput() : string
    {
        $result = '';

        if ($this->positiveNumbers > 0)
        {
            $result.= $this->formatPositiveNumbers() . PHP_EOL;
        }
        else
        {
            $result.= $this->pritEmptyDefaultValue() . PHP_EOL;
        }

        if ($this->negativeNumbers > 0)
        {
            $result.= $this->formatNegativeNumbers() . PHP_EOL;
        }
        else
        {
            $result.= $this->pritEmptyDefaultValue() . PHP_EOL;
        }

        if ($this->zeroNumbers > 0)
        {
            $result.= $this->formatZeroNumbers();
        }
        else
        {
            $result.= $this->pritEmptyDefaultValue();
        }

        return  $result;
    }

    /**
     * @param $item
     * @return bool
     */
    private function isPositive($item) : bool
    {
        return $item > 0;
    }

    /**
     * @param $item
     * @return bool
     */
    private function isNegative($item) : bool
    {
        return $item < 0;
    }

    /**
     * @return string
     */
    private function formatPositiveNumbers() : string
    {
        return number_format($this->positiveNumbers / $this->totalElements, 6);
    }

    /**
     * @return string
     */
    private function pritEmptyDefaultValue() : string
    {
        return number_format(0, 6);
    }

    /**
     * @return string
     */
    private function formatNegativeNumbers() : string
    {
        return number_format($this->negativeNumbers / $this->totalElements, 6);
    }

    /**
     * @return string
     */
    private function formatZeroNumbers() : string
    {
        return number_format($this->zeroNumbers / $this->totalElements, 6);
    }
}
