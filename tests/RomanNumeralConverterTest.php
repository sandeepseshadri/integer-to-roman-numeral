<?php

use PHPUnit\Framework\TestCase;

class RomanNumeralConverterTest extends TestCase
{
    /** @test */
    public function it_an_instance()
    {
        $converter = new \App\RomanNumeralConverter();
        $this->assertInstanceOf(App\RomanNumeralConverter::class, $converter);
    }

    
}