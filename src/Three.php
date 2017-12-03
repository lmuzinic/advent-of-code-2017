<?php
declare(strict_types=1);


namespace AdventOfCode\Year2017;


use AdventOfCode\Bootstrap\Day;

class Three implements Day
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

    public function secondPuzzle(string $input)
    {
    }
}
