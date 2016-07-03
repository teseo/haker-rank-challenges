<?php
namespace MatrixDifference;


/**
 * Class MatrixDifference
 * @package MatrixDifference
 */
class MatrixDifference
{

    /**
     * @param array $matrix
     * @return int
     */
    public function calculate(array $matrix) : int
    {
        $leftSum = 0;
        $rightSum = 0;
        $pointerLeft = 0;
        $totalRows = count($matrix);
        $pointerRight = $totalRows- 1;

        foreach ($matrix as $row)
        {
            $leftSum+= $row[$pointerLeft];
            $pointerLeft++;
            $rightSum+= $row[$pointerRight];
            $pointerRight--;
        }

        return  abs($leftSum - $rightSum);
    }
}