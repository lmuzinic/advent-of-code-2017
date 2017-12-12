<?php
declare(strict_types=1);


namespace AdventOfCode\Year2017;


use AdventOfCode\Bootstrap\Day;

class Day12 implements Day
{
    private $list = [];

    public function firstPuzzle(string $input)
    {
        $this->list = $this->prepare($input);

        $group = [];

        foreach ($this->list as $id => $connections) {
            if ($this->isConnected($id, 0)) {
                $group[] = $id;
            }
        }

        return count($group);
    }

    private function prepare(string $input)
    {
        $list = [];
        $items = explode("\n", $input);
        foreach ($items as $item) {
            $item = explode(" <-> ", $item);

            $list[$item[0]] = array_flip(explode(", ", $item[1]));
        }

        return $list;
    }

    private function isConnected($id, $connectedToId, $visited = [])
    {
        if (array_key_exists($connectedToId, $this->list[$id])) {
            return true;
        } else {
            foreach ($this->list[$id] as $connectedId => $_) {
                if (!array_key_exists($connectedId, $visited)) {
                    $visited[$connectedId] = true;
                    if ($this->isConnected($connectedId, $connectedToId, $visited)) {
                        return true;
                    }
                }
            }
        }

        return false;
    }

    public function secondPuzzle(string $input)
    {
        $this->list = $this->prepare($input);

        $skip = [];
        foreach ($this->list as $group => $_) {
            foreach ($this->list as $id => $__) {
                if ($this->isConnected($id, $group)) {
                    $skip[$id] = true;
                    break;
                }
            }
        }

        return count($skip);
    }
}
