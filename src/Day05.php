<?php
declare(strict_types=1);


namespace AdventOfCode\Year2017;


use AdventOfCode\Bootstrap\Day;

class Day05 implements Day
{
    public function firstPuzzle(string $input)
    {
        $maze = explode("\n", $input);

        $mazeLength = count($maze);
        $position = 0;
        $steps = 0;
        while ($position < $mazeLength) {
            $offset = $maze[$position];
            $maze[$position] += 1;
            $position += $offset;
            $steps += 1;
        }

        return $steps;
    }

    public function secondPuzzle(string $input)
    {
        $maze = explode("\n", $input);

        $mazeLength = count($maze);
        $position = 0;
        $steps = 0;
        while ($position < $mazeLength) {
            $offset = $maze[$position];

            if ($offset >= 3) {
                $maze[$position] -= 1;
            } else {
                $maze[$position] += 1;
            }
            $position += $offset;
            $steps += 1;
        }

        return $steps;
    }
}
