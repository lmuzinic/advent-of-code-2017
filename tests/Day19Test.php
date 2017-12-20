<?php
declare(strict_types=1);

namespace AdventOfCode\Year2017\Tests;

use AdventOfCode\Bootstrap\Day;
use AdventOfCode\Year2017\Day19;
use PHPUnit\Framework\TestCase;

class Day19Test extends TestCase
{
    private const SAMPLE = <<<SAMPLE
     |          
     |  +--+    
     A  |  C    
 F---|----E|--+ 
     |  |  |  D 
     +B-+  +--+
SAMPLE;

    /**
     * @var Day19
     */
    private $day;

    public function setUp()
    {
        $this->day = new Day19();
    }

    /**
     * @doesNotPerformAssertions
     * @group actual
     */
    public function testDayNineteenFirstPuzzle()
    {
        echo $this->day->firstPuzzle(Input::Day19);
    }

    /**
     * @doesNotPerformAssertions
     * @group actual
     */
    public function testDayNineteenSecondPuzzle()
    {
        echo $this->day->secondPuzzle(Input::Day19);
    }

    /**
     * @group sample
     */
    public function testDayNineteenFirstPuzzleWithSampleData()
    {
        $actualSolution = $this->day->firstPuzzle(self::SAMPLE);

        $this->assertEquals('ABCDEF', $actualSolution);
    }

    /**
     * @group sample
     */
    public function testDayNineteenSecondPuzzleWithSampleData()
    {
        $actualSolution = $this->day->secondPuzzle(self::SAMPLE);

        $this->assertEquals(38, $actualSolution);
    }
}
