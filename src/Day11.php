<?php
declare(strict_types=1);


namespace AdventOfCode\Year2017;


use AdventOfCode\Bootstrap\Day;

class Day11 implements Day
{
    private $position = [0, 0, 0];

    private $movementsMap = [
        'n' => [0, 1, -1],
        'ne' => [1, 0, -1],
        'se' => [1, -1, 0],
        's' => [0, -1, 1],
        'sw' => [-1, 0, 1],
        'nw' => [-1, 1, 0],
    ];

    public function firstPuzzle(string $input)
    {
        $directions = explode(",", $input);

        foreach ($directions as $direction) {
            $this->move($direction);
        }

        return $this->getDistance();
    }

    private function move($direction)
    {
        $this->position[0] += $this->movementsMap[$direction][0];
        $this->position[1] += $this->movementsMap[$direction][1];
        $this->position[2] += $this->movementsMap[$direction][2];
    }

    private function getDistance()
    {
        return max(array_map(function ($coordinate) {
            return abs($coordinate);
        }, $this->position));
    }

    public function secondPuzzle(string $input)
    {
        $directions = explode(",", $input);

        $maxDistance = 0;
        foreach ($directions as $direction) {
            $this->move($direction);
            if ($this->getDistance() > $maxDistance) {
                $maxDistance = $this->getDistance();
            }
        }

        return $maxDistance;
    }
}
