<?php
declare(strict_types=1);


namespace AdventOfCode\Year2017;


class Particle
{
    private $id;
    private $position;
    private $originalPosition;
    private $velocity;
    private $acceleration;

    public function __construct(int $id, array $position, array $velocity, array $acceleration)
    {
        $this->id = $id;
        $this->position = $position;
        $this->originalPosition = $position;
        $this->velocity = $velocity;
        $this->acceleration = $acceleration;
    }

    public function tick($time)
    {
        for ($coordinate = 0; $coordinate <= 2; $coordinate += 1) {
            $this->position[$coordinate] =
                $this->originalPosition[$coordinate] +
                $this->velocity[$coordinate] * $time +
                $this->acceleration[$coordinate] * ($time * ($time + 1) / 2);
        }
    }

    public function getDistance()
    {
        return array_sum(array_map(function ($coordinate) {
            return abs($coordinate);
        }, $this->position));
    }

    public function getPositionHash()
    {
        return implode(',', $this->position);
    }

    public function getId()
    {
        return $this->id;
    }
}
