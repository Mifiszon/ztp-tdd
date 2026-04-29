<?php

namespace App;

class StringCalculator
{
    public function add(string $numbers): int
    {
        $numsArray = $this->parse_input($numbers);

        return array_sum($numsArray);
    }

    private function parse_input(string $input): array
    {
        $delimiter = $this->delimit($input);

        return $this->normalise($delimiter);
    }

    private function delimit(string $input): string
    {

    }
    private function normalise(string $numbers): int
    {

    }
}
