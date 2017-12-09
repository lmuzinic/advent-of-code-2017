<?php
declare(strict_types=1);

namespace AdventOfCode\Year2017\Tests;

use AdventOfCode\Bootstrap\Day;
use AdventOfCode\Year2017\Day06;
use PHPUnit\Framework\TestCase;

class Day06Test extends TestCase
{
    /**
     * @var Day06
     */
    private $day;

    public function setUp()
    {
        $this->day = new Day06();
    }

    /**
     * @doesNotPerformAssertions
     * @group actual
     */
    public function testDaySixFirstPuzzle()
    {
        echo $this->day->firstPuzzle(Input::Day06);
    }

    /**
     * @doesNotPerformAssertions
     * @group actual
     */
    public function testDaySixSecondPuzzle()
    {
        echo $this->day->secondPuzzle(Input::Day06);
    }

    /**
     * @dataProvider firstPartSampleData
     * @group sample
     */
    public function testDaySixFirstPartWithSampleData($input, $expectedSolution)
    {
        $actualSolution = $this->day->firstPuzzle($input);

        $this->assertEquals($expectedSolution, $actualSolution);
    }

    /**
     * @dataProvider secondPartSampleData
     * @group sample
     */
    public function testDaySixSecondPartWithSampleData($input, $expectedSolution)
    {
        $actualSolution = $this->day->secondPuzzle($input);

        $this->assertEquals($expectedSolution, $actualSolution);
    }

    public function firstPartSampleData()
    {
        return [
            ["0\t2\t7\t0", 5],
            ["4\t10\t4\t1\t8\t4\t9\t14\t5\t1\t14\t15\t0\t15\t3\t5", 12841],
        ];
    }

    public function secondPartSampleData()
    {
        return [
            ["0\t2\t7\t0", 4],
            ["4\t10\t4\t1\t8\t4\t9\t14\t5\t1\t14\t15\t0\t15\t3\t5", 8038],
        ];
    }
}
