<?php
declare(strict_types=1);

namespace AdventOfCode\Year2017\Tests;

use AdventOfCode\Bootstrap\Day;
use AdventOfCode\Year2017\Day12;
use PHPUnit\Framework\TestCase;

class Day12Test extends TestCase
{
    private const SAMPLE = <<<SAMPLE
0 <-> 2
1 <-> 1
2 <-> 0, 3, 4
3 <-> 2, 4
4 <-> 2, 3, 6
5 <-> 6
6 <-> 4, 5
7 <-> 8
8 <-> 7
9 <-> 9
10 <-> 10
11 <-> 10
SAMPLE;

    /**
     * @var Day12
     */
    private $day;

    public function setUp()
    {
        $this->day = new Day12();
    }

    /**
     * @doesNotPerformAssertions
     * @group actual
     */
    public function testDayTwelveFirstPuzzle()
    {
        echo $this->day->firstPuzzle(Input::Day12);
    }

    /**
     * @doesNotPerformAssertions
     * @group actual
     */
    public function testDayTwelveSecondPuzzle()
    {
        echo $this->day->secondPuzzle(Input::Day12);
    }

    /**
     * @group sample
     */
    public function testDayTwelveFirstPuzzleWithSampleData()
    {
        $actualSolution = $this->day->firstPuzzle(self::SAMPLE);

        $this->assertEquals(6, $actualSolution);
    }

    /**
     * @group sample
     */
    public function testDayTwelveSecondPuzzleWithSampleData()
    {
        $actualSolution = $this->day->secondPuzzle(self::SAMPLE);

        $this->assertEquals(5, $actualSolution);
    }
}
