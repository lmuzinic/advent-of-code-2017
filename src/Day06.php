<?php
declare(strict_types=1);


namespace AdventOfCode\Year2017;


use AdventOfCode\Bootstrap\Day;

class Day06 implements Day
{
    public function firstPuzzle(string $input)
    {
        $memoryBanks = explode("\t", $input);

        return $this->getCycles($memoryBanks, 1);
    }

    public function secondPuzzle(string $input)
    {
        $memoryBanks = explode("\t", $input);

        return $this->getCycles($memoryBanks, 2) - $this->firstPuzzle($input);
    }

    private function getCycles(array $memoryBanks, int $occurrences)
    {
        $totalMemoryBanks = count($memoryBanks);

        $cycles = 0;
        $state = implode("", $memoryBanks);
        $seenStates[$state] = 1;
        while ($seenStates[$state] < ($occurrences + 1)) {
            $cycles += 1;
            $banksForDistribution = max($memoryBanks);
            $location = array_search($banksForDistribution, $memoryBanks);

            $memoryBanks[$location] = 0;
            while ($banksForDistribution > 0) {
                $location = ++$location % $totalMemoryBanks;
                $memoryBanks[$location] += 1;
                $banksForDistribution -= 1;
            }

            $state = implode("", $memoryBanks);
            if (isset($seenStates[$state])) {
                $seenStates[$state] += 1;
            } else {
                $seenStates[$state] = 1;
            }
        }

        return $cycles;
    }
}
