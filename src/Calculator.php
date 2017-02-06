<?php

namespace SergioDeCandelario\FizzBuzzExtendedKata;

/**
 * Calculator
 *
 * @author Sergio de Candelario <sergio.decandelario@gmail.com>
 */
class Calculator
{
    private $text;

    private $multipleOf;

    /**
     * Calculator constructor.
     *
     * @param string $text
     * @param $multipleOf
     */
    public function __construct(string $text, $multipleOf)
    {
        $this->text = $text;
        $this->multipleOf = $multipleOf;
    }


    public function checkNumber(int $number)
    {
        if ($number % $this->multipleOf == 0) {
            return $this->text;
        }

        return '';
    }
}