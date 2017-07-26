<?php
/**
 * Created by PhpStorm.
 * User: sakinashivji
 * Date: 7/26/17
 * Time: 5:58 PM
 */
require 'Calculator.php';

class CalculatorTests extends PHPUnit_Framework_TestCase
{
    private $calculator;

    protected function setUp()
    {
        $this->calculator = new Calculator();
    }

    protected function tearDown()
    {
        $this->calculator = NULL;
    }

    public function testAdd()
    {
        $result = $this->calculator->add(1, 2);
        $this->assertEquals(3, $result);
    }

}