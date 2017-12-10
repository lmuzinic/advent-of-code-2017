<?php
declare(strict_types=1);


namespace AdventOfCode\Year2017;


use AdventOfCode\Bootstrap\Day;

class Day10 implements Day
{
    private $list = [];
    private $listSize = 0;
    private $position = 0;
    private $skipSize = 0;

    public function __construct($list)
    {
        $this->list = $list;
        $this->listSize = count($list);
    }

    public function firstPuzzle(string $input)
    {
        $lengths = explode(",", $input);

        foreach ($lengths as $length) {
            $this->reverse($length);
            $this->position($length);
        }

        return $this->list[0] * $this->list[1];
    }

    private function reverse($length)
    {
        $slice = [];
        for ($i = 0; $i < $length; $i += 1) {
            $slice[] = $this->list[($this->position + $i) % $this->listSize];
        }

        $reversedSlice = array_reverse($slice);
        for ($i = 0; $i < $length; $i += 1) {
            $this->list[($this->position + $i) % $this->listSize] = $reversedSlice[$i];
        }
    }

    private function position($length)
    {
        $this->position = (($this->position + $length) % $this->listSize) + $this->skipSize;
        $this->skipSize += 1;
    }

    public function secondPuzzle(string $input)
    {
        $repeat = 64;
        while ($repeat--) {
            foreach ($this->convert($input) as $length) {
                $this->reverse($length);
                $this->position($length);
            }
        }

        return implode("", iterator_to_array($this->hex($this->reducedList())));
    }

    private function convert(string $input)
    {
        for ($i = 0; $i < strlen($input); $i += 1) {
            yield ord($input[$i]);
        }

        foreach ([17, 31, 73, 47, 23] as $item) {
            yield $item;
        }
    }

    private function reducedList()
    {
        for ($i = 0; $i < 16; $i += 1) {
            $slice = array_slice($this->list,$i * 16, 16);
            yield
                $slice[0] ^
                $slice[1] ^
                $slice[2] ^
                $slice[3] ^
                $slice[4] ^
                $slice[5] ^
                $slice[6] ^
                $slice[7] ^
                $slice[8] ^
                $slice[9] ^
                $slice[10] ^
                $slice[11] ^
                $slice[12] ^
                $slice[13] ^
                $slice[14] ^
                $slice[15];
        }
    }

    private function hex($denseHash)
    {
        foreach ($denseHash as $item) {
            yield str_pad(dechex($item), 2, "0", STR_PAD_LEFT);
        }
    }
}
