<?php
declare(strict_types=1);


namespace AdventOfCode\Year2017;


use AdventOfCode\Bootstrap\Day;

class Day07 implements Day
{
    private const REGEX_MULTIPLE = '/(^\w*)\s\((\d*)\)\s->\s([a-z, ]*)/';
    private const REGEX_SINGLE = '/(^\w*)\s\((\d*)\)/';

    /**
     * @var Disc[]
     */
    private $discsMap = [];

    /**
     * @var int
     */
    private $correctWeight = 0;

    /**
     * @var Disc
     */
    private $problematicDisc;

    public function firstPuzzle(string $input)
    {
        $discs = explode("\n", $input);

        foreach ($discs as $disc) {
            $disc = $this->regexMatch($disc);

            $node = $this->getNode($disc[0]);
            $node->setWeight((int)$disc[1]);

            if (isset($disc[2])) {
                foreach ($disc[2] as $childDisc) {
                    $childNode = $this->getNode($childDisc);
                    $childNode->setParent($node);
                    $node->addChildren($childNode);
                }
            }
        }

        foreach ($this->discsMap as $node) {
            if (!$node->hasParent()) {
                return $node->getName();
            }
        }
    }

    private function getNode(string $name)
    {
        if (isset($this->discsMap[$name])) {
            return $this->discsMap[$name];
        }

        $node = new Disc($name, null);
        $this->discsMap[$name] = $node;

        return $node;
    }

    public function secondPuzzle(string $input)
    {
        $rootNodeName = $this->firstPuzzle($input);

        $this->walk($rootNodeName);

        return $this->problematicDisc->getWeight() - abs($this->problematicDisc->getChildrenWeight() - $this->correctWeight);
    }

    private function walk($nodeName)
    {
        $weights = [];
        $counterWeights = [];
        foreach ($this->discsMap[$nodeName]->getChildren() as $node) {
            $weights[$node->getChildrenWeight()][] = $node->getName();
            $counterWeights[$node->getName()][] = $node->getChildrenWeight();
        }

        if (count($weights) === 2) {
            $this->problematicDisc = $this->discsMap[current(min($weights))];
            $this->correctWeight = $this->discsMap[current(max($weights))]->getChildrenWeight();
            $this->walk(current(min($weights)));
        }
    }

    public function regexMatch(string $input)
    {
        if (!preg_match(self::REGEX_MULTIPLE, $input, $matches)) {
            preg_match(self::REGEX_SINGLE, $input, $matches);
        }

        if (isset($matches[3])) {
            $matches[3] = explode(", ", $matches[3]);
        }

        unset($matches[0]);

        return array_values($matches);
    }
}
