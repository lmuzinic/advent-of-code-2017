<?php
declare(strict_types=1);

namespace AdventOfCode\Year2017\Tests;

use AdventOfCode\Bootstrap\Day;
use AdventOfCode\Year2017\Day01;
use PHPUnit\Framework\TestCase;

class Day01Test extends TestCase
{
    /**
     * @var Day
     */
    private $day;

    public function setUp()
    {
        $this->day = new Day01();
    }

    /**
     * @doesNotPerformAssertions
     * @group actual
     */
    public function testDayOneFirstPuzzle()
    {
        echo $this->day->firstPuzzle(Input::Day01);
    }

    /**
     * @doesNotPerformAssertions
     * @group actual
     */
    public function testDayOneSecondPuzzle()
    {
        echo $this->day->secondPuzzle(Input::Day01);
    }

    /**
     * @dataProvider firstPartSampleData
     * @group sample
     */
    public function testDayOneFirstPartWithSampleData($input, $expectedSolution)
    {
        $actualSolution = $this->day->firstPuzzle($input);

        $this->assertEquals($expectedSolution, $actualSolution);
    }

    /**
     * @dataProvider secondPartSampleData
     * @group sample
     */
    public function testDayOneSecondPartWithSampleData($input, $expectedSolution)
    {
        $actualSolution = $this->day->secondPuzzle($input);

        $this->assertEquals($expectedSolution, $actualSolution);
    }

    public function firstPartSampleData()
    {
        return [
            ['1122', 3],
            ['1111', 4],
            ['1234', 0],
            ['91212129', 9],
        ];
    }

    public function secondPartSampleData()
    {
        return [
            ['1212', 6],
            ['1221', 0],
            ['123425', 4],
            ['123123', 12],
            ['12131415', 4],
        ];
    }
}
