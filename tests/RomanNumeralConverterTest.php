<?php

use App\RomanNumeralConverter;
use PHPUnit\Framework\TestCase;

class RomanNumeralConverterTest extends TestCase
{
    /**
     * setup - instantiate the converter to be used in the tests
     */
    public function setUp()
    {
        $this->converter = new RomanNumeralConverter();
    }

    /** @test */
    public function it_an_instance()
    {
        $this->assertInstanceOf(RomanNumeralConverter::class, $this->converter);
    }

    /**
     * @test
     * @expectedException InvalidArgumentException
     */
    public function it_throws_exception_for_invalid_input()
    {
        $this->converter->convert('invalid input');
    }

    /**
     * @test
     * @expectedException OutOfRangeException
     */
    public function it_throws_exception_for_input_0()
    {
        $this->converter->convert(0);
    }

    /**
     * @test
     * @expectedException OutOfRangeException
     */
    public function it_throws_exception_for_input_over_4999()
    {
        $this->converter->convert(5000);
    }

    /**
     * @test
     * @dataProvider romanNumeralDataProvider
     * @param $input
     * @param $expected
     */
    public function it_converts_to_roman_numeral($input, $expected)
    {
        $result = $this->converter->convert($input);
        $this->assertEquals($expected, $result);
    }

    /**
     * list of integers and their roman symbols
     * @return array
     */
    public function romanNumeralDataProvider()
    {
        return [
            [1, 'I'],
            [2, 'II'],
            [3, 'III'],
            [4, 'IV'],
            [5, 'V'],
            [6, 'VI'],
            [7, 'VII'],
            [9, 'IX'],
            [10, 'X'],
            [11, 'XI'],
            [20, 'XX'],
            [40, 'XL'],
            [50, 'L'],
            [90, 'XC'],
            [100, 'C'],
            [400, 'CD'],
            [500, 'D'],
            [900, 'CM'],
            [1000, 'M'],
            [4000, 'MMMM'],
            [4999, 'MMMMCMXCIX'],
            [100.5, 'CH'],
            [100.6666, 'CH..']
        ];
    }
}
