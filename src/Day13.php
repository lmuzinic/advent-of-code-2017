<?php
declare(strict_types=1);


namespace AdventOfCode\Year2017;


use AdventOfCode\Bootstrap\Day;

class Day13 implements Day
{
    public function firstPuzzle(string $input)
    {
        $scanners = explode("\n", $input);

        $totalSeverity = 0;
        foreach ($scanners as $scanner) {
            [$depth, $range] = explode(": ", $scanner);

            if ((int)abs($depth - (($range - 1) * 2) * round($depth / (($range - 1) * 2))) === 0) {
                $totalSeverity += $depth * $range;
            }
        }

        return $totalSeverity;
    }

    public function secondPuzzle(string $input)
    {
        $scanners = explode("\n", $input);

        $delay = 0;
        do {
            $delay += 1;

            $canPass = true;
            foreach ($scanners as $scanner) {
                [$depth, $range] = explode(": ", $scanner);

                if ((int)abs(($depth + $delay) - (($range - 1) * 2) * round(($depth + $delay) / (($range - 1) * 2))) === 0) {
                    $canPass = false;
                    break;
                }
            }
        } while (!$canPass);

        return $delay;
    }
}
