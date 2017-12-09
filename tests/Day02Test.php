<?php
declare(strict_types=1);

namespace AdventOfCode\Year2017\Tests;

use AdventOfCode\Bootstrap\Day;
use AdventOfCode\Year2017\Day02;
use PHPUnit\Framework\TestCase;

class Day02Test extends TestCase
{
    /**
     * @var Day
     */
    private $day;

    public function setUp()
    {
        $this->day = new Day02();
    }

    /**
     * @doesNotPerformAssertions
     * @group actual
     */
    public function testDayTwoFirstPuzzle()
    {
        echo $this->day->firstPuzzle(Input::Day02);
    }

    /**
     * @doesNotPerformAssertions
     * @group actual
     */
    public function testDayTwoSecondPuzzle()
    {
        echo $this->day->secondPuzzle(Input::Day02);
    }

    /**
     * @dataProvider firstPartSampleData
     * @group sample
     */
    public function testDayTwoFirstPartWithSampleData($input, $expectedSolution)
    {
        $actualSolution = $this->day->firstPuzzle($input);

        $this->assertEquals($expectedSolution, $actualSolution);
    }

    /**
     * @dataProvider secondPartSampleData
     * @group sample
     */
    public function testDayTwoSecondPartWithSampleData($input, $expectedSolution)
    {
        $actualSolution = $this->day->secondPuzzle($input);

        $this->assertEquals($expectedSolution, $actualSolution);
    }

    public function firstPartSampleData()
    {
        return [
            ["5\t1\t9\t5\n7\t5\t3\n2\t4\t6\t8", 18],
        ];
    }

    public function secondPartSampleData()
    {
        return [
            ["5\t9\t2\t8\n9\t4\t7\t3\n3\t8\t6\t5", 9]
        ];
    }
}
