<?php
declare(strict_types=1);

namespace AdventOfCode\Year2017\Tests;

use AdventOfCode\Bootstrap\Day;
use AdventOfCode\Year2017\Day17;
use PHPUnit\Framework\TestCase;

class Day17Test extends TestCase
{
    private const SAMPLE = '3';

    /**
     * @var Day17
     */
    private $day;

    public function setUp()
    {
        $this->day = new Day17();
    }

    /**
     * @doesNotPerformAssertions
     * @group actual
     */
    public function testDaySeventeenFirstPuzzle()
    {
        echo $this->day->firstPuzzle(Input::Day17);
    }

    /**
     * @doesNotPerformAssertions
     * @group actual
     */
    public function testDaySeventeenSecondPuzzle()
    {
        echo $this->day->secondPuzzle(Input::Day17);
    }

    /**
     * @group sample
     */
    public function testDaySeventeenFirstPuzzleWithSampleData()
    {
        $actualSolution = $this->day->firstPuzzle(self::SAMPLE);

        $this->assertEquals(638, $actualSolution);
    }
}
