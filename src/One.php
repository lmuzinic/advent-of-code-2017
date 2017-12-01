<?php
declare(strict_types=1);


namespace AdventOfCode\Year2017;


use AdventOfCode\Bootstrap\Day;

class One implements Day
{
    public function firstPuzzle(string $input)
    {
        $inputLength = strlen($input);

        $matchedSum = 0;
        for ($position = 0; $position < $inputLength; $position += 1) {
            if ($input[$position] === $input[($position + 1) % $inputLength]) {
                $matchedSum += $input[$position];
            }
        }

        return $matchedSum;
    }

    public function secondPuzzle(string $input)
    {
        $inputLength = strlen($input);
        $middlePosition = $inputLength / 2;

        $matchedSum = 0;
        for ($position = 0; $position < $inputLength; $position += 1) {
            if ($input[$position % $middlePosition] === $input[$position % $middlePosition + $middlePosition]) {
                $matchedSum += $input[$position];
            }
        }

        return $matchedSum;
    }
}
