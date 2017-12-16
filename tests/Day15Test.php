<?php
declare(strict_types=1);

namespace AdventOfCode\Year2017\Tests;

use AdventOfCode\Bootstrap\Day;
use AdventOfCode\Year2017\Day15;
use PHPUnit\Framework\TestCase;

class Day15Test extends TestCase
{
    private const SAMPLE = '65,8921';

    /**
     * @var Day15
     */
    private $day;

    public function setUp()
    {
        $this->day = new Day15();
    }

    /**
     * @doesNotPerformAssertions
     * @group actual
     */
    public function testDayFifteenFirstPuzzle()
    {
        echo $this->day->firstPuzzle(Input::Day15);
    }

    /**
     * @doesNotPerformAssertions
     * @group actual
     */
    public function testDayFifteenSecondPuzzle()
    {
        echo $this->day->secondPuzzle(Input::Day15);
    }

    /**
     * @group sample
     */
    public function testDayFifteenFirstPuzzleWithSampleData()
    {
        $actualSolution = $this->day->firstPuzzle(self::SAMPLE);

        $this->assertEquals(588, $actualSolution);
    }

    /**
     * @group sample
     */
    public function testDayFifteenSecondPuzzleWithSampleData()
    {
        $actualSolution = $this->day->secondPuzzle(self::SAMPLE);

        $this->assertEquals(309, $actualSolution);
    }
}
