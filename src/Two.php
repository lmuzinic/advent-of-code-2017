<?php
declare(strict_types=1);


namespace AdventOfCode\Year2017;


use AdventOfCode\Bootstrap\Day;

class Two implements Day
{
    public function firstPuzzle(string $input)
    {
        $rows = explode("\n", $input);

        $diffSum = 0;
        foreach ($rows as $row) {
            $row = explode("\t", $row);

            $diffSum += (max($row) - min($row));
        }


        return $diffSum;
    }

    public function secondPuzzle(string $input)
    {
        $rows = explode("\n", $input);

        $divSum = 0;
        foreach ($rows as $row) {
            $row = explode("\t", $row);

            $divSum += $this->findDiv($row);
        }


        return $divSum;
    }

    private function findDiv(array $row)
    {
        $rowSize = count($row);
        for ($i = 0; $i < $rowSize; $i += 1) {
            for ($j = 1; $j < $rowSize; $j += 1) {
                if (($row[$i] > $row[$j]) && ($row[$i] % $row[$j] === 0)) {
                    return ($row[$i] / $row[$j]);
                } else if (($row[$j] > $row[$i]) && ($row[$j] % $row[$i] === 0)) {
                    return ($row[$j] / $row[$i]);
                }
            }
        }
    }
}
