<?php

use PlusMinus\PlusMinus;

class PlusMinusTest extends PHPUnit_Framework_TestCase
{
    /** @var  PlusMinus $plusmMinus */
    private $plusmMinus;

    /**
     * Instantiate the PlusMinus class.
     */
    public function setUp()
    {
        $this->plusmMinus = new PlusMinus();
    }

    /**
     * Ensure that the plus minus class can be resolved from the unit test
     */
    public function testPlusMinusCanBeResolved()
    {
        $this->assertTrue($this->plusmMinus instanceof \PlusMinus\PlusMinus);
    }

    public function testReturnForArrayContainingOnlyOneZero()
    {
        $input = [0];
        $this->assertEquals('0.000000' . PHP_EOL .'0.000000' . PHP_EOL .'1.000000', $this->plusmMinus->parse($input));
    }
    public function testReturnForArrayContainingOnlyOneNegativeNumber()
    {
        $input = [-1];
        $this->assertEquals('0.000000' . PHP_EOL .'1.000000' . PHP_EOL .'0.000000', $this->plusmMinus->parse($input));
    }

    public function testReturnForArrayContainingNoNegativeNumbers()
    {
        $input = [1,0];
        $this->assertEquals('0.500000' . PHP_EOL . '0.000000' . PHP_EOL . '0.500000', $this->plusmMinus->parse($input));
    }

    public function testReturnThreelinesInArrayOfSixElementsOfAllKinds()
    {
        $input = [-4, 3, -9, 0, 4, 1];
        $this->assertEquals('0.500000' . PHP_EOL . 0.333333 . PHP_EOL. 0.166667 , $this->plusmMinus->parse($input));
    }
    public function testReturnForSevenElementsWithOutZeroValues()
    {
        $input = [1, -2, -7, 9, 1, -8, -5];

        $this->assertEquals(0.428571 . PHP_EOL . 0.571429 . PHP_EOL. '0.000000' , $this->plusmMinus->parse($input));
    }
}
