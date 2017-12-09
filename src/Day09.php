<?php
declare(strict_types=1);


namespace AdventOfCode\Year2017;


use AdventOfCode\Bootstrap\Day;

class Day09 implements Day
{
    private $groupStack = [];
    private $isGarbage = false;

    public function firstPuzzle(string $input)
    {
        $score = 0;

        $inputLength = strlen($input);
        for($position = 0; $position < $inputLength; $position += 1) {
            switch ($input[$position]) {
                case '<':
                    $this->startGarbage();
                    break;
                case '>':
                    $this->stopGarbage();
                    break;
                case '{':
                    $this->startGroup();
                    break;
                case '}':
                    $score += $this->stopGroup();
                    break;
                case '!':
                    $position += 1;
                    break;
            }
        }

        return $score;
    }

    private function startGroup()
    {
        if (!$this->isGarbage) {
            array_push($this->groupStack, true);
        }
    }

    private function stopGroup()
    {
        if (!$this->isGarbage) {
            array_pop($this->groupStack);

            return count($this->groupStack) + 1;
        }

        return 0;
    }

    private function startGarbage()
    {
        $this->isGarbage = true;
    }

    private function stopGarbage()
    {
        $this->isGarbage = false;
    }

    public function secondPuzzle(string $input)
    {
        $garbage = 0;

        $inputLength = strlen($input);
        for($position = 0; $position < $inputLength; $position += 1) {
            if ($this->isGarbage) {
                $garbage += 1;
            }

            switch ($input[$position]) {
                case '<':
                    $this->startGarbage();
                    break;
                case '>':
                    $this->stopGarbage();
                    $garbage -= 1;
                    break;
                case '{':
                    $this->startGroup();
                    break;
                case '}':
                    $this->stopGroup();
                    break;
                case '!':
                    $garbage -= 1;
                    $position += 1;
                    break;
            }
        }

        return $garbage;
    }
}
