<?php

use MatrixDifference\MatrixDifference;

class MatrixDifferenceTest extends PHPUnit_Framework_TestCase
{
    /** @var  MatrixDifference $matrix */
    private $matrix;

    /**
     * Instantiate the BoilerPlate.
     */
    public function setUp()
    {
        // Create a new Boiler Plate instance.
        $this->matrix = new MatrixDifference();
    }

    /**
     * Ensure that the boiler plante can be resolved from the unit test
     */
    public function testBoilerPlateCanBeResolved()
    {
        $this->assertTrue($this->matrix instanceof \MatrixDifference\MatrixDifference);
    }

    /**
     * Minimal square matrix
     */
    public function testMinimalSquareMatrix()
    {
        $minimalMatrix = [[1]];
        $result = $this->matrix->calculate($minimalMatrix);
        $this->assertEquals(0, $result);
    }
    /**
     * 2x2 Square Matrix
     */
    public function test2X2SquareMatrix()
    {
        $minimalMatrix = [
            [1,2],
            [18,9]
        ];
        $result = $this->matrix->calculate($minimalMatrix);
        $this->assertEquals(10, $result);
    }

    /**
     * 3x3 Square Matrix
     */
    public function test3X3SquareMatrix()
    {
        $matrix = [
            [11,2,4],
            [4,5,6],
            [10,8,-12],
        ];
        $result = $this->matrix->calculate($matrix);
        $this->assertEquals(15, $result);
    }
    /**
     * 9x9 Square Matrix
     */
    public function test9X9SquareMatrix()
    {
        $matrix = [
            [11,2,4,11,2,4,11,2,4],
            [4,5,6,4,5,6,4,5,6],
            [10,8,-12,10,8,-12,10,8,-12],
            [11,2,4,11,2,4,11,2,4],
            [4,5,6,4,5,6,4,5,6],
            [10,8,-12,10,8,-12,10,8,-12],
            [11,2,4,11,2,4,11,2,4],
            [4,5,6,4,5,6,4,5,6],
            [10,8,-12,10,8,-12,10,8,-12],
        ];
        $result = $this->matrix->calculate($matrix);
        $this->assertEquals(45, $result);
    }
}
