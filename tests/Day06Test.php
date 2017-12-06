<?php
declare(strict_types=1);

namespace AdventOfCode\Year2017\Tests;

use AdventOfCode\Bootstrap\Day;
use AdventOfCode\Year2017\Day06;
use PHPUnit\Framework\TestCase;

class Day06Test extends TestCase
{
    private const INPUT = "0	5	10	0	11	14	13	4	11	8	8	7	1	4	12	11";

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
     */
    public function testDaySixFirstPuzzle()
    {
        echo $this->day->firstPuzzle(self::INPUT);
    }

    /**
     * @doesNotPerformAssertions
     */
    public function testDaySixSecondPuzzle()
    {
        echo $this->day->secondPuzzle(self::INPUT);
    }

    /**
     * @dataProvider firstPartSampleData
     */
    public function testDaySixFirstPartWithSampleData($input, $expectedSolution)
    {
        $actualSolution = $this->day->firstPuzzle($input);

        $this->assertEquals($expectedSolution, $actualSolution);
    }

    /**
     * @dataProvider secondPartSampleData
     */
    public function testDaySixSecondPartWithSampleData($input, $expectedSolution)
    {
        $actualSolution = $this->day->secondPuzzle($input);

        $this->assertEquals($expectedSolution, $actualSolution);
    }

    public function firstPartSampleData()
    {
        return [
            ["0\t2\t7\t0", 5]
        ];
    }

    public function secondPartSampleData()
    {
        return [
            ["0\t2\t7\t0", 4]
        ];
    }
}
