<?php

namespace App;

class RomanNumeralConverter
{
    /**
     * Ordered list of roman symbols
     *
     * @var array
     */
    protected $symbols = [
        1000 => 'M',
        900 => 'CM',
        500 => 'D',
        400 => 'CD',
        100 => 'C',
        90 => 'XC',
        50 => 'L',
        40 => 'XL',
        10 => 'X',
        9 => 'IX',
        5 => 'V',
        4 => 'IV',
        1 => 'I',
        ".5" => 'H',
        ".0833" => '.'
    ];

    /**
     * Converts an given integer into roman numeral
     *
     * @param $input
     * @return mixed
     */
    public function convert($input)
    {
        $this->validateInput($input);
        $result = [];
        foreach ($this->symbols as $limit => $symbol) {
            while ($input >= $limit) {
                $result[] = $symbol;
                $input -= $limit;
            }
        }

        return implode($result);
    }

    /**
     * Checks if the input is valid integer that can be converted to roman numeral
     *
     * @param $input
     */
    protected function validateInput($input)
    {
        if (!is_numeric($input)) {
            throw new \InvalidArgumentException;
        }

        if ($input == 0 || $input >=  5000) {
            throw new \OutOfRangeException;
        }
    }
}
