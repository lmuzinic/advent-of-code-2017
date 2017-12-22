<?php
declare(strict_types=1);


namespace AdventOfCode\Year2017;


use AdventOfCode\Bootstrap\Day;

class Day20 implements Day
{
    /**
     * @var Particle[]
     */
    private $particles;

    public function firstPuzzle(string $input)
    {
        $this->init($input);

        $closestParticle = null;
        foreach ($this->particles as $particle) {
            $particle->tick(1000);

            if (is_null($closestParticle)) {
                $closestParticle = $particle;
            }

            if ($particle->getDistance() < $closestParticle->getDistance()) {
                $closestParticle = $particle;
            }
        }

        return $closestParticle->getId();
    }

    public function secondPuzzle(string $input)
    {
        $this->init($input);

        foreach (range(0, 1000) as $time) {
            $positions = [];
            foreach ($this->particles as $particle) {
                $particle->tick($time);

                $positions[$particle->getPositionHash()][] = $particle;
            }

            foreach ($positions as $position) {
                if (count($position) > 1) {
                    foreach ($position as $particle) {
                        unset($this->particles[$particle->getId()]);
                    }
                }
            }
        }

        return count($this->particles);
    }

    private function init(string $input)
    {
        $id = 0;
        foreach (explode("\n", $input) as $particle) {
            preg_match_all("/<([-,\d]*)>/", $particle, $matches);

            $position = explode(',', $matches[1][0]);
            $velocity = explode(',', $matches[1][1]);
            $acceleration = explode(',', $matches[1][2]);

            $this->particles[$id] = new Particle($id, $position, $velocity, $acceleration);
            $id += 1;
        }
    }
}
