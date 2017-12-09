<?php
declare(strict_types=1);

namespace AdventOfCode\Year2017\Tests;

use AdventOfCode\Bootstrap\Day;
use AdventOfCode\Year2017\Day04;
use PHPUnit\Framework\TestCase;

class Day04Test extends TestCase
{
    /**
     * @var Day04
     */
    private $day;

    public function setUp()
    {
        $this->day = new Day04();
    }

    /**
     * @doesNotPerformAssertions
     * @group actual
     */
    public function testDayFourFirstPuzzle()
    {
        echo $this->day->firstPuzzle(Input::Day04);
    }

    /**
     * @doesNotPerformAssertions
     * @group actual
     */
    public function testDayFourSecondPuzzle()
    {
        echo $this->day->secondPuzzle(Input::Day04);
    }

    /**
     * @dataProvider firstPartSampleData
     * @group sample
     */
    public function testDayFourFirstPartWithSampleData($input, $expectedSolution)
    {
        $actualSolution = $this->day->validPassPhrase($input);

        $this->assertEquals($expectedSolution, $actualSolution);
    }

    /**
     * @dataProvider secondPartSampleData
     * @group sample
     */
    public function testDayFourSecondPartWithSampleData($input, $expectedSolution)
    {
        $actualSolution = $this->day->extraValidPassPhrase($input);

        $this->assertEquals($expectedSolution, $actualSolution);
    }

    public function firstPartSampleData()
    {
        return [
            ["aa bb cc dd ee", true],
            ["aa bb cc dd aa", false],
            ["aa bb cc dd aaa", true],
        ];
    }

    public function secondPartSampleData()
    {
        return [
            ["abcde fghij", true],
            ["abcde xyz ecdab", false],
            ["a ab abc abd abf abj", true],
            ["iiii oiii ooii oooi oooo", true],
            ["oiii ioii iioi iiio", false],
        ];
    }
}
