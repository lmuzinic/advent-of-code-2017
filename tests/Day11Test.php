<?php
declare(strict_types=1);

namespace AdventOfCode\Year2017\Tests;

use AdventOfCode\Bootstrap\Day;
use AdventOfCode\Year2017\Day11;
use PHPUnit\Framework\TestCase;

class Day11Test extends TestCase
{
    /**
     * @var Day11
     */
    private $day;

    public function setUp()
    {
        $this->day = new Day11();
    }

    /**
     * @doesNotPerformAssertions
     * @group actual
     */
    public function testDayElevenFirstPuzzle()
    {
        echo $this->day->firstPuzzle(Input::Day11);
    }

    /**
     * @doesNotPerformAssertions
     * @group actual
     */
    public function testDayElevenSecondPuzzle()
    {
        echo $this->day->secondPuzzle(Input::Day11);
    }

    /**
     * @dataProvider firstPartSampleData
     * @group sample
     */
    public function testDayElevenFirstPuzzleWithSampleData($input, $expectedSolution)
    {
        $actualSolution = $this->day->firstPuzzle($input);

        $this->assertEquals($expectedSolution, $actualSolution);
    }

    /**
     * @dataProvider secondPartSampleData
     * @group sample
     */
    public function testDayElevenSecondPuzzleWithSampleData($input, $expectedSolution)
    {
        $actualSolution = $this->day->secondPuzzle($input);

        $this->assertEquals($expectedSolution, $actualSolution);
    }

    public function firstPartSampleData()
    {
        return [
            ["n", 1],
            ["ne", 1],
            ["se", 1],
            ["s", 1],
            ["sw", 1],
            ["nw", 1],
            ["ne,ne,ne", 3],
            ["ne,ne,sw,sw", 0],
            ["ne,ne,s,s", 2],
            ["se,sw,se,sw,sw", 3],
            ["se,s,se,s,se,s", 6],
        ];
    }

    public function secondPartSampleData()
    {
        return [
            ["s,s,s,n,n,n", 3],
        ];
    }
}
