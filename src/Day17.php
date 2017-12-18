<?php
declare(strict_types=1);


namespace AdventOfCode\Year2017;


use AdventOfCode\Bootstrap\Day;

class Day17 implements Day
{
    public function firstPuzzle(string $input)
    {
        $steps = (int)$input;
        $buffer = [0];
        $position = 0;

        $insert = 1;
        while ($insert < 2018) {
            $position = ($position + $steps) % count($buffer);

            $start = array_slice($buffer, 0, $position + 1);
            $end = array_slice($buffer, $position + 1, count($buffer) - $position);
            $buffer = array_merge($start, [$insert], $end);

            $position += 1;
            $insert += 1;
        }

        return $buffer[$position + 1];
    }

    public function secondPuzzle(string $input)
    {
        $steps = (int)$input;
        $buffer = $insert = 1;
        $position = $value = 0;

        while ($insert < 50000000) {
            $position = ($position + $steps) % $buffer;

            if ($position == 0) {
                $value = $insert;
            }

            $buffer += 1;
            $insert += 1;
            $position += 1;
        }

        return $value;
    }
}
