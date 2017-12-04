<?php
declare(strict_types=1);


namespace AdventOfCode\Year2017;


use AdventOfCode\Bootstrap\Day;

class Day03 implements Day
{
    public function firstPuzzle(string $input)
    {
        $memoryLocation = (int)$input;

        if ($memoryLocation === 1) {
            return 0;
        }

        $cornerBase = 3;
        $circumference = pow($cornerBase, 2);

        $steps = 1;
        while ($memoryLocation > $circumference) {
            $cornerBase += 2;
            $circumference = pow($cornerBase, 2);

            $steps += 1;
        }

        $sideLength = $cornerBase - 1;
        $sideMax = $circumference;
        while(!$this->isMemoryLocationBetween($memoryLocation, $sideLength, $sideMax)) {
            $sideMax -= $sideLength;
        }

        $steps += $this->pointDistanceToMean($memoryLocation, $sideMax - $sideLength, $sideMax);

        return $steps;
    }

    private function isMemoryLocationBetween($memoryLocation, $sideLength, $sideMax)
    {
        if (
            $memoryLocation <= $sideMax &&
            $memoryLocation > ($sideMax - $sideLength)
        ) {
            return true;
        }

        return false;
    }

    private function pointDistanceToMean($point, $start, $end)
    {
        $arithmeticMean = ($start + $end) / 2;

        return abs($arithmeticMean - $point);
    }

    private $compass = [
        [1, 0],
        [0, 1],
        [-1, 0],
        [0, -1],
    ];

    private $orientation = 1;
    private $location = [0, 0];

    private $matrix;

    private function turnLeft()
    {
        $this->orientation -= 1;

        if ($this->orientation === -1) {
            $this->orientation = 3;
        }
    }

    private function move()
    {
        $this->location[0] += 1 * $this->compass[$this->orientation][0];
        $this->location[1] += 1 * $this->compass[$this->orientation][1];
    }

    private function sumAdjacentLocations()
    {
        $sum = 0;
        $locations = [
            [1,0],
            [1,1],
            [1,-1],
            [0,1],
            [0,-1],
            [-1,0],
            [-1,1],
            [-1,-1],
        ];

        foreach ($locations as $location) {
            $sum += $this->locationValue(
                $this->location[0] + $location[0],
                $this->location[1] + $location[1]
            );
        }

        return $sum;
    }

    private function locationValue($x, $y)
    {
        if (isset($this->matrix[$x][$y])) {
            return $this->matrix[$x][$y];
        }

        return 0;
    }

    private function putValue($value)
    {
        $this->matrix[$this->location[0]][$this->location[1]] = $value;
    }

    private function getValue()
    {
        return $this->matrix[$this->location[0]][$this->location[1]];
    }

    public function secondPuzzle(string $input)
    {
        $this->putValue(1);

        $sideLength = 1;
        $turns = 0;
        $i = 1;
        while(true) {
            $this->move();
            $this->putValue($this->sumAdjacentLocations());

            if ($i % $sideLength === 0) {
                $this->turnLeft();
                $turns += 1;
            }

            if ($turns === 2) {
                $sideLength += 1;
                $turns = 0;
            }

            if ($this->getValue() > $input) {
                return $this->getValue();
            }

            $i += 1;
        }
    }
}
