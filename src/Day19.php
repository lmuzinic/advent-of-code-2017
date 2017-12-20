<?php
declare(strict_types=1);


namespace AdventOfCode\Year2017;


use AdventOfCode\Bootstrap\Day;

class Day19 implements Day
{
    private $tubes;

    private $compass = [
        [-1, 0],
        [0, 1],
        [1, 0],
        [0, -1],
    ];

    private $orientation = 2;
    private $location = [0, 0];

    private $phrase = '';
    private $steps = 0;

    public function firstPuzzle(string $input)
    {
        $this->init($input);

        while ($this->insideBounds()) {
            if ($this->read() === ' ') {
                break;
            }

            if (in_array($this->read(), ['|', '-'])) {
                $this->move();
                continue;
            }

            if (in_array($this->read(), range('A', 'Z'))) {
                $this->phrase .= $this->read();
                $this->move();
                continue;
            }

            if ($this->read() === '+') {
                $this->turn();

                if (!$this->continue()) {
                    $this->turn();
                    $this->turn();
                }

                $this->move();
                continue;
            }
        }

        return $this->phrase;
    }

    public function secondPuzzle(string $input)
    {
        $this->init($input);

        while ($this->insideBounds()) {
            if ($this->read() === ' ') {
                break;
            }

            $this->steps += 1;
            if (in_array($this->read(), ['|', '-'])) {
                $this->move();
                continue;
            }

            if (in_array($this->read(), range('A', 'Z'))) {
                $this->move();
                continue;
            }

            if ($this->read() === '+') {
                $this->turn();

                if (!$this->continue()) {
                    $this->turn();
                    $this->turn();
                }

                $this->move();
                continue;
            }

        }

        return $this->steps;
    }

    private function init($input)
    {
        $rows = explode("\n", $input);

        foreach ($rows as $row) {
            $this->tubes[] = str_split($row);
        }

        $this->location = [
            0,
            array_search('|', $this->tubes[0])
        ];
    }

    private function insideBounds()
    {
        return isset($this->tubes[$this->location[0]][$this->location[1]]);
    }

    private function move()
    {
        $this->location[0] += 1 * $this->compass[$this->orientation][0];
        $this->location[1] += 1 * $this->compass[$this->orientation][1];
    }

    private function turn()
    {
        $this->orientation -= 1;

        if ($this->orientation === -1) {
            $this->orientation = 3;
        }
    }

    private function continue()
    {
        if (!isset($this->tubes[$this->location[0] + 1 * $this->compass[$this->orientation][0]][$this->location[1] + 1 * $this->compass[$this->orientation][1]])) {
            return false;
        }

        if ($this->tubes[$this->location[0] + 1 * $this->compass[$this->orientation][0]][$this->location[1] + 1 * $this->compass[$this->orientation][1]] == ' ') {
            return false;
        }

        return true;
    }

    private function read()
    {
        return $this->tubes[$this->location[0]][$this->location[1]];
    }
}
