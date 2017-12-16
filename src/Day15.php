<?php
declare(strict_types=1);


namespace AdventOfCode\Year2017;


use AdventOfCode\Bootstrap\Day;

class Day15 implements Day
{
    private const FACTOR_A = 16807;
    private const FACTOR_B = 48271;

    public function firstPuzzle(string $input)
    {
        [$valueA, $valueB] = explode(",", $input);

        $matches = 0;

        $repeat = 40000000;
        while ($repeat--) {
            $valueA = $this->generatorA()->send($valueA);
            $binValueA = base_convert($valueA, 10, 2);

            $valueB = $this->generatorB()->send($valueB);
            $binValueB = base_convert($valueB, 10, 2);

            if (substr($binValueA, -16) === substr($binValueB, -16)) {
                $matches += 1;
            }
        }

        return $matches;
    }

    public function secondPuzzle(string $input)
    {
        [$valueA, $valueB] = explode(",", $input);

        $matches = 0;

        $repeat = 5000000;
        while ($repeat--) {
            $valueA = $this->pickyGeneratorA()->send($valueA);
            $binValueA = base_convert($valueA, 10, 2);

            $valueB = $this->pickyGeneratorB()->send($valueB);
            $binValueB = base_convert($valueB, 10, 2);

            if (substr($binValueA, -16) === substr($binValueB, -16)) {
                $matches += 1;
            }
        }

        return $matches;
    }

    private function generatorA()
    {
        while (true) {
            $lastValue = (yield * self::FACTOR_A) % 2147483647;

            yield $lastValue;
        }
    }

    private function generatorB()
    {
        while (true) {
            $lastValue = (yield * self::FACTOR_B) % 2147483647;

            yield $lastValue;
        }
    }

    private function pickyGeneratorA()
    {
        while (true) {
            $value = yield;
            do {
                $value = ($value * self::FACTOR_A) % 2147483647;
            } while (!($value % 4 === 0));

            yield $value;
        }
    }

    private function pickyGeneratorB()
    {
        while (true) {
            $value = yield;
            do {
                $value = ($value * self::FACTOR_B) % 2147483647;
            } while (!($value % 8 === 0));

            yield $value;
        }
    }
}
