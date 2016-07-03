<?php
namespace MatrixDifference;

/**
 * Class MatrixDifference
 * @package MatrixDifference
 */
class MatrixDifference
{
    /**
     * @var int
     */
    private $leftSum      = 0;
    /**
     * @var int
     */
    private $rightSum     = 0;
    /**
     * @var int
     */
    private $pointerLeft  = 0;
    /**
     * @var int
     */
    private $pointerRight = 0;

    /**
     * @param array $matrix
     * @return int
     */
    public function calculate(array $matrix) : int
    {
        $this->pointerRight = count($matrix) - 1;

        foreach ($matrix as $row)
        {
            $this->processRow($row);
        }

        return $this->calculateAbsolute();
    }

    /**
     * @param $row
     */
    private function processRow($row)
    {
        $this->leftSum  += $row[$this->pointerLeft];
        $this->pointerLeft++;
        $this->rightSum += $row[$this->pointerRight];
        $this->pointerRight--;
    }

    /**
     * @return int
     */
    private function calculateAbsolute() :int
    {
        return abs($this->leftSum - $this->rightSum);
    }
}