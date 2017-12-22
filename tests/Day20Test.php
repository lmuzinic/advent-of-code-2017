<?php
declare(strict_types=1);

namespace AdventOfCode\Year2017\Tests;

use AdventOfCode\Bootstrap\Day;
use AdventOfCode\Year2017\Day20;
use PHPUnit\Framework\TestCase;

class Day20Test extends TestCase
{
    private const CLOSEST_SAMPLE = <<<SAMPLE
p=<3,0,0>, v=<2,0,0>, a=<-1,0,0>
p=<4,0,0>, v=<0,0,0>, a=<-2,0,0>
SAMPLE;

    private const COLLISION_SAMPLE = <<<SAMPLE
p=<-6,0,0>, v=<3,0,0>, a=<0,0,0>
p=<-4,0,0>, v=<2,0,0>, a=<0,0,0>
p=<-2,0,0>, v=<1,0,0>, a=<0,0,0>
p=<3,0,0>, v=<-1,0,0>, a=<0,0,0>
SAMPLE;

    /**
     * @var Day20
     */
    private $day;

    public function setUp()
    {
        $this->day = new Day20();
    }

    /**
     * @doesNotPerformAssertions
     * @group actual
     */
    public function testDayTwentyFirstPuzzle()
    {
        echo $this->day->firstPuzzle(Input::Day20);
    }

    /**
     * @doesNotPerformAssertions
     * @group actual
     */
    public function testDayTwentySecondPuzzle()
    {
        echo $this->day->secondPuzzle(Input::Day20);
    }

    /**
     * @group sample
     */
    public function testDayTwentyFirstPuzzleWithSampleData()
    {
        $actualSolution = $this->day->firstPuzzle(self::CLOSEST_SAMPLE);

        $this->assertEquals(0, $actualSolution);
    }

    /**
     * @group sample
     */
    public function testDayTwentySecondPuzzleWithSampleData()
    {
        $actualSolution = $this->day->secondPuzzle(self::COLLISION_SAMPLE);

        $this->assertEquals(1, $actualSolution);
    }
}
