<?php
declare(strict_types=1);

namespace AdventOfCode\Year2017\Tests;

use AdventOfCode\Bootstrap\Day;
use AdventOfCode\Year2017\Day05;
use PHPUnit\Framework\TestCase;

class Day05Test extends TestCase
{
    /**
     * @var Day05
     */
    private $day;

    public function setUp()
    {
        $this->day = new Day05();
    }

    /**
     * @doesNotPerformAssertions
     * @group actual
     */
    public function testDayFiveFirstPuzzle()
    {
        echo $this->day->firstPuzzle(Input::Day05);
    }

    /**
     * @doesNotPerformAssertions
     * @group actual
     */
    public function testDayFiveSecondPuzzle()
    {
        echo $this->day->secondPuzzle(Input::Day05);
    }

    /**
     * @dataProvider firstPartSampleData
     * @group sample
     */
    public function testDayFiveFirstPartWithSampleData($input, $expectedSolution)
    {
        $actualSolution = $this->day->firstPuzzle($input);

        $this->assertEquals($expectedSolution, $actualSolution);
    }

    /**
     * @dataProvider secondPartSampleData
     * @group sample
     */
    public function testDayFiveSecondPartWithSampleData($input, $expectedSolution)
    {
        $actualSolution = $this->day->secondPuzzle($input);

        $this->assertEquals($expectedSolution, $actualSolution);
    }

    public function firstPartSampleData()
    {
        return [
            ["0\n3\n0\n1\n-3", 5],
        ];
    }

    public function secondPartSampleData()
    {
        return [
            ["0\n3\n0\n1\n-3", 10],
        ];
    }
}
