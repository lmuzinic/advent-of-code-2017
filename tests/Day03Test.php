<?php
declare(strict_types=1);

namespace AdventOfCode\Year2017\Tests;

use AdventOfCode\Bootstrap\Day;
use AdventOfCode\Year2017\Day03;
use PHPUnit\Framework\TestCase;

class Day03Test extends TestCase
{
    private const INPUT = '265149';

    /**
     * @var Day
     */
    private $day;

    public function setUp()
    {
        $this->day = new Day03();
    }

    /**
     * @doesNotPerformAssertions
     * @group actual
     */
    public function testDayThreeFirstPuzzle()
    {
        echo $this->day->firstPuzzle(self::INPUT);
    }

    /**
     * @doesNotPerformAssertions
     * @group actual
     */
    public function testDayThreeSecondPuzzle()
    {
        echo $this->day->secondPuzzle(self::INPUT);
    }

    /**
     * @dataProvider firstPartSampleData
     * @group sample
     */
    public function testDayThreeFirstPartWithSampleData($input, $expectedSolution)
    {
        $actualSolution = $this->day->firstPuzzle($input);

        $this->assertEquals($expectedSolution, $actualSolution);
    }

    /**
     * @dataProvider secondPartSampleData
     * @group sample
     */
    public function testDayThreeSecondPartWithSampleData($input, $expectedSolution)
    {
        $actualSolution = $this->day->secondPuzzle($input);

        $this->assertEquals($expectedSolution, $actualSolution);
    }

    public function firstPartSampleData()
    {
        return [
            ["1", 0],
            ["12", 3],
            ["23", 2],
            ["1024", 31],
        ];
    }

    public function secondPartSampleData()
    {
        return [
            ["2", 4],
            ["4", 5],
            ["5", 10],
            ["10", 11],
            ["11", 23],
            ["23", 25],
            ["25", 26],
            ["26", 54],
            ["54", 57],
            ["57", 59],
            ["59", 122],
        ];
    }
}
