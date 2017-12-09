<?php
declare(strict_types=1);

namespace AdventOfCode\Year2017\Tests;

use AdventOfCode\Bootstrap\Day;
use AdventOfCode\Year2017\Day07;
use PHPUnit\Framework\TestCase;

class Day07Test extends TestCase
{
    private const SAMPLE = <<<SAMPLE
pbga (66)
xhth (57)
ebii (61)
havc (66)
ktlj (57)
fwft (72) -> ktlj, cntj, xhth
qoyq (66)
padx (45) -> pbga, havc, qoyq
tknk (41) -> ugml, padx, fwft
jptl (61)
ugml (68) -> gyxo, ebii, jptl
gyxo (61)
cntj (57)
SAMPLE;

    /**
     * @var Day07
     */
    private $day;

    public function setUp()
    {
        $this->day = new Day07();
    }

    /**
     * @doesNotPerformAssertions
     */
    public function testDaySevenFirstPuzzle()
    {
        echo $this->day->firstPuzzle(Input::Day07);
    }

    /**
     * @doesNotPerformAssertions
     */
    public function testDaySevenSecondPuzzle()
    {
        echo $this->day->secondPuzzle(Input::Day07);
    }

    /**
     * @group sample
     */
    public function testDaySevenFirstPuzzleWithSampleData()
    {
        $actualMatch = $this->day->firstPuzzle(self::SAMPLE);

        $this->assertEquals('tknk', $actualMatch);
    }

    /**
     * @group sample
     */
    public function testDaySevenSecondPuzzleWithSampleData()
    {
        $actualMatch = $this->day->secondPuzzle(self::SAMPLE);

        $this->assertEquals(60, $actualMatch);
    }

    /**
     * @dataProvider regexSampleData
     * @group sample
     */
    public function testRegexMatcher($input, $expectedMatch)
    {
        $actualMatch = $this->day->regexMatch($input);

        $this->assertEquals($expectedMatch, $actualMatch);
    }

    public function regexSampleData()
    {
        return [
            ["fzqsahw (256) -> lybovx, pdmhva", ["fzqsahw", 256, ["lybovx", "pdmhva"]]],
            ["rxivjo (206) -> mewof, hrncqs, qgfstpq", ["rxivjo", 206, ["mewof", "hrncqs", "qgfstpq"]]],
            ["jhldwxy (26)", ["jhldwxy", 26]],
            ["ootidjt (63)", ["ootidjt", 63]],
        ];
    }
}
