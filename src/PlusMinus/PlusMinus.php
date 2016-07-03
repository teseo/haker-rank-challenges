<?php
namespace PlusMinus;

class PlusMinus
{
    private $positiveNumbers = 0;
    private $zeroNumbers     = 0;
    private $negativeNumbers = 0;
    private $totalElements   = 0;

    public function parse($inputArray)
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
    private function printOutput()
    {
        $result = '';

        if($this->positiveNumbers > 0)
        {
            $result.= $this->formatPositiveNumbers() . PHP_EOL;
        }
        else
        {
            $result.= $this->pritEmptyDefaultValue() . PHP_EOL;
        }

        if($this->negativeNumbers > 0)
        {
            $result.= $this->formatNegativeNumbers() . PHP_EOL;
        }
        else
        {
            $result.= $this->pritEmptyDefaultValue() . PHP_EOL;
        }

        if($this->zeroNumbers > 0)
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
    private function isPositive($item)
    {
        return $item > 0;
    }

    /**
     * @param $item
     * @return bool
     */
    private function isNegative($item)
    {
        return $item < 0;
    }

    /**
     * @return string
     */
    private function formatPositiveNumbers()
    {
        return number_format($this->positiveNumbers / $this->totalElements, 6);
    }

    /**
     * @return string
     */
    private function pritEmptyDefaultValue()
    {
        return number_format(0, 6);
    }

    /**
     * @return string
     */
    private function formatNegativeNumbers()
    {
        return number_format($this->negativeNumbers / $this->totalElements, 6);
    }

    /**
     * @return string
     */
    private function formatZeroNumbers()
    {
        return number_format($this->zeroNumbers / $this->totalElements, 6);
    }
}