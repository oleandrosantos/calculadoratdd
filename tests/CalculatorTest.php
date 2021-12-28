<?php

use PHPUnit\Framework\TestCase;
use classDir\Calculator;

class CalculatorTest extends TestCase
{
    /**
     * @dataProvider numProvider
     */
    public function testSumTwoNumbers(int $number1, int $number2){
        $calculator = new Calculator();
        $calculator->setNumber1($number1);
        $calculator->setNumber2($number2);
        $this->assertEquals($number1+$number2, $calculator->sum());
    }

    /**
     * @dataProvider numProvider
     */
    public function testSubtractionTwoNumbers(int $number1, int $number2){
        $calculator = new Calculator();
        $calculator->setNumber1($number1);
        $calculator->setNumber2($number2);
        $this->assertEquals($number1-$number2, $calculator->subtraction());
    }

    /**
     * @dataProvider numProvider
     */
    public function testMultiplyTwoNumbers(int $number1, int $number2){
        $calculator = new Calculator();
        $calculator->setNumber1($number1);
        $calculator->setNumber2($number2);
        $this->assertEquals($number1*$number2, $calculator->multiply());
    }

    /**
     * @dataProvider numProvider
     */
    public function testDivisionTwoNumbers(int $number1, int $number2){
        $calculator = new Calculator();
        $calculator->setNumber1($number1);
        $calculator->setNumber2($number2);

        $this->assertEquals($number1/$number2, $calculator->division());
    }

    public function numProvider(): array
    {
        return[
            [10,2],
            [6,3],
            [3,1]
        ];
    }
}
