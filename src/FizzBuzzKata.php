<?php

namespace App;

class FizzBuzzKata
{
    public function fizzBuzz(int $number): string
    {
        if ($this->isFizzBuzzNumber($number)) {
            return 'FizzBuzz';
        }
        if ($this->isFizzNumber($number)) {
            return 'Fizz';
        }
        if ($this->isBuzzNumber($number)) {
            return 'Buzz';
        }
        return $number;
    }

    private function isFizzBuzzNumber(int $number): bool
    {
        return $this->isBuzzNumber($number)
            && $this->isFizzNumber($number);
    }
    private function isFizzNumber(int $number): bool
    {
        return 0 === $number % 3;
    }

    private function isBuzzNumber(int $number): bool
    {
        return 0 === $number % 5;
    }
}