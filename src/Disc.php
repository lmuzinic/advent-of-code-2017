<?php
declare(strict_types=1);


namespace AdventOfCode\Year2017;


class Disc
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var int
     */
    private $weight;

    /**
     * @var Disc
     */
    private $parent;

    /**
     * @var Disc[]
     */
    private $children = [];

    public function __construct(string $name, $payload)
    {
        $this->name = $name;
        $this->weight = $payload;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param int $weight
     */
    public function setWeight(int $weight): void
    {
        $this->weight = $weight;
    }

    public function getChildrenWeight()
    {
        $sumChildrenWeight = 0;
        foreach ($this->children as $child) {
            $sumChildrenWeight += $child->getChildrenWeight();
        }

        return $sumChildrenWeight + $this->getWeight();
    }

    /**
     * @return Disc
     */
    public function getParent(): Disc
    {
        return $this->parent;
    }

    /**
     * @return bool
     */
    public function hasParent(): bool
    {
        return !is_null($this->parent);
    }

    /**
     * @param Disc $parent
     */
    public function setParent(Disc $parent): void
    {
        $this->parent = $parent;
    }

    /**
     * @return Disc[]
     */
    public function getChildren(): array
    {
        return $this->children;
    }

    /**
     * @return bool
     */
    public function hasChildren(): bool
    {
        if (count($this->children) > 0) {
            return true;
        }

        return false;
    }

    /**
     * @param Disc $child
     */
    public function addChildren(Disc $child): void
    {
        $this->children[] = $child;
    }
}
