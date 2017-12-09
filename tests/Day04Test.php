<?php
declare(strict_types=1);

namespace AdventOfCode\Year2017\Tests;

use AdventOfCode\Bootstrap\Day;
use AdventOfCode\Year2017\Day04;
use PHPUnit\Framework\TestCase;

class Day04Test extends TestCase
{
    private const SAMPLE_FIRST = [
        ["aa bb cc dd ee", true],
        ["aa bb cc dd aa", false],
        ["aa bb cc dd aaa", true],
    ];

    private const SAMPLE_SECOND = [
        ["abcde fghij", true],
        ["abcde xyz ecdab", false],
        ["a ab abc abd abf abj", true],
        ["iiii oiii ooii oooi oooo", true],
        ["oiii ioii iioi iiio", false],
    ];

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
     * @group sample
     */
    public function testDayFourFirstPartWithSampleData()
    {
        $actualSolution = $this->day->firstPuzzle(implode("\n", array_column(self::SAMPLE_FIRST, 0)));

        $this->assertEquals(2, $actualSolution);
    }

    /**
     * @group sample
     */
    public function testDayFourSecondPartWithSampleData()
    {
        $actualSolution = $this->day->secondPuzzle(implode("\n", array_column(self::SAMPLE_SECOND, 0)));

        $this->assertEquals(3, $actualSolution);
    }

    /**
     * @dataProvider firstPartSampleData
     * @group sample
     */
    public function testValidPassPhrase($input, $expectedSolution)
    {
        $actualSolution = $this->day->validPassPhrase($input);

        $this->assertEquals($expectedSolution, $actualSolution);
    }

    /**
     * @dataProvider secondPartSampleData
     * @group sample
     */
    public function testExtraValidPassPhrase($input, $expectedSolution)
    {
        $actualSolution = $this->day->extraValidPassPhrase($input);

        $this->assertEquals($expectedSolution, $actualSolution);
    }

    public function firstPartSampleData()
    {
        return self::SAMPLE_FIRST;
    }

    public function secondPartSampleData()
    {
        return self::SAMPLE_SECOND;
    }
}
