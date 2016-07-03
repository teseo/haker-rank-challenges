<?php

use PlusMinus\PlusMinus;

class PlusMinusTest extends PHPUnit_Framework_TestCase
{
    /** @var  PlusMinus $matrix */
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
}
