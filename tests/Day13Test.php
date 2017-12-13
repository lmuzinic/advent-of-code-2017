<?php
declare(strict_types=1);

namespace AdventOfCode\Year2017\Tests;

use AdventOfCode\Bootstrap\Day;
use AdventOfCode\Year2017\Day13;
use PHPUnit\Framework\TestCase;

class Day13Test extends TestCase
{
    private const SAMPLE = <<<SAMPLE
0: 3
1: 2
4: 4
6: 4
SAMPLE;

    /**
     * @var Day13
     */
    private $day;

    public function setUp()
    {
        $this->day = new Day13();
    }

    /**
     * @doesNotPerformAssertions
     * @group actual
     */
    public function testDayThirteenFirstPuzzle()
    {
        echo $this->day->firstPuzzle(Input::Day13);
    }

    /**
     * @doesNotPerformAssertions
     * @group actual
     */
    public function testDayThirteenSecondPuzzle()
    {
        echo $this->day->secondPuzzle(Input::Day13);
    }

    /**
     * @group sample
     */
    public function testDayThirteenFirstPuzzleWithSampleData()
    {
        $actualSolution = $this->day->firstPuzzle(self::SAMPLE);

        $this->assertEquals(24, $actualSolution);
    }

    /**
     * @group sample
     */
    public function testDayThirteenSecondPuzzleWithSampleData()
    {
        $actualSolution = $this->day->secondPuzzle(self::SAMPLE);

        $this->assertEquals(10, $actualSolution);
    }
}
