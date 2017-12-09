<?php
declare(strict_types=1);

namespace AdventOfCode\Year2017\Tests;

use AdventOfCode\Bootstrap\Day;
use AdventOfCode\Year2017\Day08;
use PHPUnit\Framework\TestCase;

class Day08Test extends TestCase
{
    private const SAMPLE = <<<SAMPLE
b inc 5 if a > 1
a inc 1 if b < 5
c dec -10 if a >= 1
c inc -20 if c == 10
a inc 1 if a <= 10
a inc 1 if a != 0
SAMPLE;

    /**
     * @var Day08
     */
    private $day;

    public function setUp()
    {
        $this->day = new Day08();
    }

    /**
     * @doesNotPerformAssertions
     * @group actual
     */
    public function testDayEightFirstPuzzle()
    {
        echo $this->day->firstPuzzle(Input::Day08);
    }

    /**
     * @doesNotPerformAssertions
     * @group actual
     */
    public function testDayEightSecondPuzzle()
    {
        echo $this->day->secondPuzzle(Input::Day08);
    }

    /**
     * @group sample
     */
    public function testDayEightFirstPuzzleWithSampleData()
    {
        $actualMatch = $this->day->firstPuzzle(self::SAMPLE);

        $this->assertEquals(3, $actualMatch);
    }

    /**
     * @group sample
     */
    public function testDayEightSecondPuzzleWithSampleData()
    {
        $actualMatch = $this->day->secondPuzzle(self::SAMPLE);

        $this->assertEquals(10, $actualMatch);
    }
}
