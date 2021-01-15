<?php
use PHPUnit\Framework\TestCase;

require_once 'FizzBuzz.php';

class FizBuzzTest extends TestCase
{
    function testInvalidNumber()
    {
        $number = 1;
//        $expected = 'Invalid number!';
        $expected = 1;
        $actual = FizzBuzz::read($number);
        $this->assertEquals($expected, $actual);
    }

    function testNotFizzBuzzNumber() {
        $number = 3;
//        $expected = '1';
        $expected = 3;
        $actual = FizzBuzz::read($number);
        $this->assertEquals($expected, $actual);
    }

    function testFizzNumber() {
        $number = 3;
        $expected = 3;
        $actual = FizzBuzz::read($number);
        $this->assertEquals($expected, $actual);
    }

    function testBuzzNumber() {
        $number = 5;
        $expected = 'Buzzq';
        $actual = FizzBuzz::read($number);
        $this->assertEquals($expected, $actual);
    }

    function testFizzBuzzNumber() {
        $number = 8;
//        $expected = 'FizzBuzz';
        $expected = 8;
        $actual = FizzBuzz::read($number);
        $this->assertEquals($expected, $actual);
    }
}
