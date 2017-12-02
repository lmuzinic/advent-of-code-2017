<?php
declare(strict_types=1);

namespace AdventOfCode\Year2017\Tests;

use AdventOfCode\Bootstrap\Day;
use AdventOfCode\Year2017\Two;
use PHPUnit\Framework\TestCase;

class TwoTest extends TestCase
{
    private const INPUT = <<<INPUT
5806	6444	1281	38	267	1835	223	4912	5995	230	4395	2986	6048	4719	216	1201
74	127	226	84	174	280	94	159	198	305	124	106	205	99	177	294
1332	52	54	655	56	170	843	707	1273	1163	89	23	43	1300	1383	1229
5653	236	1944	3807	5356	246	222	1999	4872	206	5265	5397	5220	5538	286	917
3512	3132	2826	3664	2814	549	3408	3384	142	120	160	114	1395	2074	1816	2357
100	2000	112	103	2122	113	92	522	1650	929	1281	2286	2259	1068	1089	651
646	490	297	60	424	234	48	491	245	523	229	189	174	627	441	598
2321	555	2413	2378	157	27	194	2512	117	140	2287	277	2635	1374	1496	1698
101	1177	104	89	542	2033	1724	1197	474	1041	1803	770	87	1869	1183	553
1393	92	105	1395	1000	85	391	1360	1529	1367	1063	688	642	102	999	638
4627	223	188	5529	2406	4980	2384	2024	4610	279	249	2331	4660	4350	3264	242
769	779	502	75	1105	53	55	931	1056	1195	65	292	1234	1164	678	1032
2554	75	4406	484	2285	226	5666	245	4972	3739	5185	1543	230	236	3621	5387
826	4028	4274	163	5303	4610	145	5779	157	4994	5053	186	5060	3082	2186	4882
588	345	67	286	743	54	802	776	29	44	107	63	303	372	41	810
128	2088	3422	111	3312	740	3024	1946	920	131	112	477	3386	2392	1108	2741
INPUT;


    /**
     * @var Day
     */
    private $day;

    public function setUp()
    {
        $this->day = new Two();
    }

    /**
     * @doesNotPerformAssertions
     */
    public function testDayTwoFirstPuzzle()
    {
        echo $this->day->firstPuzzle(self::INPUT);
    }

    /**
     * @doesNotPerformAssertions
     */
    public function testDayTwoSecondPuzzle()
    {
        echo $this->day->secondPuzzle(self::INPUT);
    }

    /**
     * @dataProvider firstPartSampleData
     */
    public function testDayTwoFirstPartWithSampleData($input, $expectedSolution)
    {
        $actualSolution = $this->day->firstPuzzle($input);

        $this->assertEquals($expectedSolution, $actualSolution);
    }

    /**
     * @dataProvider secondPartSampleData
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
