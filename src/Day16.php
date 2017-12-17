<?php
declare(strict_types=1);


namespace AdventOfCode\Year2017;


use AdventOfCode\Bootstrap\Day;

class Day16 implements Day
{
    private $programs;

    public function __construct(string $programs)
    {
        $this->programs = $programs;
    }

    public function firstPuzzle(string $input)
    {
        $moves = explode(",", $input);

        $this->dance($moves);

        return $this->programs;
    }

    public function secondPuzzle(string $input)
    {
        $moves = explode(",", $input);

        $seenFormations = [];

        $repeat = 1000000000;
        while($repeat--) {
            $this->dance($moves);

            if (array_key_exists($this->programs, $seenFormations)) {
                $repeat -= (int)floor(1000000000 / count($seenFormations) - 1) * 48;
                $seenFormations = [];
            }

            $seenFormations[$this->programs] = true;
        }

        return $this->programs;
    }

    private function dance($moves)
    {
        foreach ($moves as $move) {
            switch ($move[0]) {
                case 's':
                    $this->spin(substr($move, 1));
                    break;
                case 'x':
                    [$a, $b] = explode("/", substr($move, 1));
                    $this->exchange($a, $b);
                    break;
                case 'p':
                    [$a, $b] = explode("/", substr($move, 1));
                    $this->partner($a, $b);
                    break;
            }
        }
    }

    private function spin($x)
    {
        $this->programs = substr($this->programs, -1 * $x) . substr($this->programs, 0, strlen($this->programs) - $x);
    }

    private function exchange($a, $b)
    {
        $exchangeChar = $this->programs[$a];
        $this->programs[$a] = $this->programs[$b];
        $this->programs[$b] = $exchangeChar;
    }

    private function partner($a, $b)
    {
        $a = strpos($this->programs, $a);
        $b = strpos($this->programs, $b);

        $this->exchange($a, $b);
    }
}
