<?php
declare(strict_types=1);

namespace AdventOfCode\Year2017\Tests;

use AdventOfCode\Bootstrap\Day;
use AdventOfCode\Year2017\Day10;
use PHPUnit\Framework\TestCase;

class Day10Test extends TestCase
{
    /**
     * @var Day10
     */
    private $day;

    public function setUp()
    {
        $this->day = new Day10(range(0,255));
    }

    /**
     * @doesNotPerformAssertions
     * @group actual
     */
    public function testDayTenFirstPuzzle()
    {
        echo $this->day->firstPuzzle(Input::Day10);
    }

    /**
     * @doesNotPerformAssertions
     * @group actual
     */
    public function testDayTenSecondPuzzle()
    {
        echo $this->day->secondPuzzle(Input::Day10);
    }

    /**
     * @dataProvider firstPartSampleData
     * @group sample
     */
    public function testDayTenFirstPuzzleWithSampleData($input, $expectedSolution)
    {
        $this->day = new Day10(range(0,4));

        $actualSolution = $this->day->firstPuzzle($input);

        $this->assertEquals($expectedSolution, $actualSolution);
    }

    /**
     * @dataProvider secondPartSampleData
     * @group sample
     */
    public function testDayTenSecondPuzzleWithSampleData($input, $expectedSolution)
    {
        $actualSolution = $this->day->secondPuzzle($input);

        $this->assertEquals($expectedSolution, $actualSolution);
    }

    public function firstPartSampleData()
    {
        return [
            ["3,4,1,5", 12]
        ];
    }

    public function secondPartSampleData()
    {
        return [
            ["", "a2582a3a0e66e6e86e3812dcb672a272"],
            ["AoC 2017", "33efeb34ea91902bb2f59c9920caa6cd"],
            ["1,2,3", "3efbe78a8d82f29979031a4aa0b16a9d"],
            ["1,2,4", "63960835bcdc130f0b66d7ff4f6a5a8e"],
        ];
    }
}
