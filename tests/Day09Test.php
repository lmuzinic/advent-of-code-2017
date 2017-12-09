<?php
declare(strict_types=1);

namespace AdventOfCode\Year2017\Tests;

use AdventOfCode\Bootstrap\Day;
use AdventOfCode\Year2017\Day09;
use PHPUnit\Framework\TestCase;

class Day09Test extends TestCase
{
    /**
     * @var Day09
     */
    private $day;

    public function setUp()
    {
        $this->day = new Day09();
    }

    /**
     * @doesNotPerformAssertions
     * @group actual
     */
    public function testDayNineFirstPuzzle()
    {
        echo $this->day->firstPuzzle(Input::Day09);
    }

    /**
     * @doesNotPerformAssertions
     * @group actual
     */
    public function testDayNineSecondPuzzle()
    {
        echo $this->day->secondPuzzle(Input::Day09);
    }

    /**
     * @dataProvider firstPartSampleData
     * @group sample
     */
    public function testDayNineFirstPuzzleWithSampleData($input, $expectedSolution)
    {
        $actualSolution = $this->day->firstPuzzle($input);

        $this->assertEquals($expectedSolution, $actualSolution);
    }

    /**
     * @dataProvider secondPartSampleData
     * @group sample
     */
    public function testDayNineSecondPuzzleWithSampleData($input, $expectedSolution)
    {
        $actualSolution = $this->day->secondPuzzle($input);

        $this->assertEquals($expectedSolution, $actualSolution);

    }

    public function firstPartSampleData()
    {
        return [
            ['{}', 1],
            ['{{{}}}', 6],
            ['{{},{}}', 5],
            ['{{{},{},{{}}}}', 16],
            ['{<a>,<a>,<a>,<a>}', 1],
            ['{{<ab>},{<ab>},{<ab>},{<ab>}}', 9],
            ['{{<!!>},{<!!>},{<!!>},{<!!>}}', 9],
            ['{{<a!>},{<a!>},{<a!>},{<ab>}}', 3],
        ];
    }

    public function secondPartSampleData()
    {
        return [
            ['<>', 0],
            ['<random characters>', 17],
            ['<<<<>', 3],
            ['<{!>}>', 2],
            ['<!!>', 0],
            ['<!!!>>', 0],
            ['<{o"i!a,<{i<a>', 10],
            ['<{o"i!a,<{i<a><{o"i!a,<{i<a>', 20],
        ];
    }
}
