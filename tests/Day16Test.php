<?php
declare(strict_types=1);

namespace AdventOfCode\Year2017\Tests;

use AdventOfCode\Bootstrap\Day;
use AdventOfCode\Year2017\Day16;
use PHPUnit\Framework\TestCase;

class Day16Test extends TestCase
{
    private const SAMPLE = 's1,x3/4,pe/b';

    /**
     * @var Day16
     */
    private $day;

    public function setUp()
    {
        $this->day = new Day16('abcdefghijklmnop');
    }

    /**
     * @doesNotPerformAssertions
     * @group actual
     */
    public function testDaySixteenFirstPuzzle()
    {
        echo $this->day->firstPuzzle(Input::Day16);
    }

    /**
     * @doesNotPerformAssertions
     * @group actual
     */
    public function testDaySixteenSecondPuzzle()
    {
        echo $this->day->secondPuzzle(Input::Day16);
    }

    /**
     * @group sample
     */
    public function testDaySixteenFirstPuzzleWithSampleData()
    {
        $this->day = new Day16('abcde');

        $actualSolution = $this->day->firstPuzzle(self::SAMPLE);

        $this->assertEquals('baedc', $actualSolution);
    }
}
