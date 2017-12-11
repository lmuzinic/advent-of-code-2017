<?php
declare(strict_types=1);


namespace AdventOfCode\Year2017\Tests;


class Input
{
    public const Day11 = 'se,sw,s,sw,s,s,nw,se,se,s,se,se,se,se,ne,sw,ne,nw,ne,ne,se,ne,s,sw,nw,se,ne,n,s,nw,ne,ne,n,sw,nw,sw,n,n,n,nw,n,n,n,n,n,sw,sw,nw,nw,nw,n,n,sw,n,nw,nw,n,nw,nw,se,nw,nw,nw,ne,nw,ne,nw,sw,s,nw,ne,nw,nw,s,sw,nw,nw,sw,nw,n,sw,sw,sw,sw,sw,sw,s,n,sw,n,sw,sw,sw,s,sw,se,sw,sw,s,se,sw,sw,ne,sw,sw,sw,n,s,sw,s,s,sw,sw,sw,sw,sw,sw,sw,sw,s,sw,s,sw,se,s,s,s,nw,s,s,ne,s,s,sw,s,nw,s,s,s,s,s,s,s,n,nw,se,sw,se,s,sw,nw,ne,s,sw,se,s,ne,s,s,s,s,s,s,s,se,s,sw,s,nw,ne,se,s,sw,s,se,s,s,s,s,s,s,se,n,se,nw,se,se,ne,ne,s,se,ne,se,s,se,se,se,nw,s,s,n,ne,se,se,sw,sw,s,se,n,se,s,se,se,nw,se,se,se,se,nw,se,se,se,n,sw,ne,se,se,ne,ne,se,se,se,nw,se,se,ne,se,se,se,ne,ne,se,se,n,se,ne,ne,se,se,n,sw,se,se,ne,s,se,ne,se,n,se,ne,se,se,ne,se,ne,se,ne,se,se,se,se,ne,se,se,s,se,ne,ne,se,sw,se,n,ne,ne,ne,ne,nw,ne,ne,ne,nw,ne,nw,ne,ne,ne,ne,ne,ne,ne,ne,se,ne,s,se,ne,ne,ne,ne,ne,se,ne,sw,ne,ne,nw,s,ne,ne,ne,ne,ne,s,nw,ne,ne,ne,ne,ne,ne,ne,ne,sw,ne,n,n,n,ne,ne,ne,ne,ne,sw,ne,s,ne,n,ne,ne,se,ne,se,ne,ne,ne,ne,ne,ne,ne,ne,ne,ne,n,n,n,n,ne,se,ne,n,ne,ne,nw,ne,n,nw,ne,n,s,nw,n,se,ne,ne,n,n,n,se,ne,ne,n,n,sw,n,n,ne,se,ne,n,n,se,se,ne,ne,se,s,n,se,se,n,n,ne,ne,sw,s,ne,ne,ne,ne,n,ne,ne,n,n,ne,ne,n,n,n,n,n,n,n,n,se,n,n,n,n,n,se,se,n,n,ne,n,nw,n,n,n,n,s,n,s,n,nw,n,n,n,n,n,n,n,s,ne,se,n,n,n,ne,n,n,n,nw,n,n,n,n,n,s,n,n,n,n,nw,nw,n,n,nw,n,n,n,n,n,n,ne,ne,n,n,n,n,n,n,s,nw,nw,nw,ne,n,n,s,sw,n,n,n,n,n,nw,sw,nw,sw,nw,ne,nw,nw,n,sw,nw,n,n,s,nw,sw,nw,nw,se,nw,nw,n,n,n,nw,n,nw,nw,n,nw,n,nw,n,n,n,sw,nw,nw,nw,n,ne,nw,nw,nw,n,sw,n,n,nw,n,n,nw,n,s,n,nw,n,se,n,s,sw,ne,n,nw,nw,nw,ne,nw,n,n,ne,nw,n,s,nw,s,sw,nw,n,n,sw,nw,nw,n,nw,n,nw,nw,n,n,nw,n,n,se,n,se,n,n,n,nw,s,nw,nw,n,nw,s,n,n,nw,ne,nw,nw,n,nw,n,nw,nw,sw,nw,s,nw,nw,n,nw,nw,n,nw,s,n,s,n,nw,nw,nw,nw,nw,nw,nw,nw,nw,ne,nw,nw,nw,sw,nw,nw,nw,nw,nw,nw,se,nw,nw,nw,nw,nw,ne,nw,s,nw,nw,n,n,nw,nw,nw,nw,nw,nw,nw,nw,nw,s,nw,n,nw,nw,nw,nw,sw,nw,ne,nw,nw,nw,nw,ne,sw,nw,nw,nw,nw,nw,sw,ne,nw,ne,nw,se,nw,sw,nw,nw,s,se,nw,nw,n,nw,nw,nw,nw,nw,se,nw,nw,nw,sw,ne,n,nw,sw,nw,nw,nw,nw,sw,nw,nw,nw,sw,ne,n,nw,nw,n,se,s,sw,nw,nw,nw,nw,nw,nw,sw,sw,s,sw,nw,s,nw,nw,ne,nw,nw,sw,nw,nw,n,n,sw,nw,nw,nw,nw,nw,sw,se,s,nw,sw,nw,nw,sw,nw,sw,nw,nw,se,nw,nw,sw,s,nw,sw,n,nw,nw,sw,nw,nw,nw,nw,nw,sw,se,sw,sw,nw,ne,sw,nw,sw,nw,nw,sw,sw,sw,sw,nw,nw,sw,nw,nw,sw,nw,n,nw,sw,nw,nw,sw,sw,nw,se,nw,sw,sw,sw,nw,sw,nw,nw,sw,sw,sw,nw,s,nw,sw,sw,sw,sw,sw,nw,sw,nw,sw,sw,sw,sw,nw,n,nw,sw,ne,nw,nw,nw,sw,ne,ne,sw,nw,ne,sw,sw,sw,sw,sw,nw,sw,ne,nw,sw,sw,sw,sw,nw,sw,n,nw,n,sw,sw,sw,nw,sw,se,sw,sw,nw,nw,n,nw,sw,sw,sw,sw,se,s,nw,n,sw,sw,nw,n,s,sw,sw,sw,sw,sw,ne,sw,se,sw,sw,sw,sw,sw,se,sw,sw,sw,sw,sw,sw,sw,sw,sw,ne,sw,se,sw,sw,sw,s,sw,sw,sw,sw,n,sw,sw,sw,sw,sw,se,sw,sw,ne,sw,sw,nw,sw,s,sw,sw,ne,sw,nw,sw,sw,sw,sw,sw,n,sw,ne,n,sw,sw,sw,sw,sw,se,sw,sw,sw,nw,s,sw,sw,sw,ne,sw,s,sw,n,sw,se,s,sw,sw,ne,s,s,sw,sw,se,se,sw,s,sw,sw,sw,sw,ne,sw,ne,se,sw,sw,s,sw,s,sw,sw,sw,sw,sw,s,sw,sw,se,sw,sw,sw,sw,ne,sw,nw,s,sw,sw,nw,sw,sw,s,sw,sw,s,s,sw,nw,sw,sw,sw,sw,n,sw,sw,sw,sw,s,sw,sw,n,sw,s,sw,ne,sw,s,sw,sw,s,sw,n,s,se,sw,sw,sw,sw,sw,sw,sw,s,s,s,sw,sw,sw,s,se,sw,sw,ne,sw,sw,sw,ne,sw,sw,nw,sw,sw,sw,n,sw,ne,sw,s,ne,s,sw,s,sw,s,s,s,sw,s,sw,s,ne,sw,sw,s,n,s,sw,s,s,sw,s,n,s,s,sw,sw,nw,sw,sw,s,sw,sw,se,sw,s,s,sw,se,s,s,s,sw,s,s,se,s,ne,s,sw,sw,nw,sw,n,s,sw,s,s,s,s,s,sw,s,sw,se,sw,s,s,sw,sw,n,sw,s,sw,sw,sw,s,sw,sw,s,s,s,s,sw,s,s,s,n,s,s,sw,s,sw,s,se,sw,s,sw,sw,n,s,s,s,s,nw,s,n,s,s,sw,sw,s,s,s,nw,s,se,s,s,n,sw,sw,n,sw,s,s,s,n,ne,ne,sw,sw,s,sw,s,s,s,s,s,s,s,s,s,s,s,sw,s,s,sw,sw,s,s,s,s,s,n,s,s,s,s,s,sw,sw,se,s,s,s,n,se,sw,n,s,s,sw,s,sw,sw,s,s,ne,sw,sw,sw,ne,s,s,se,s,s,s,s,s,s,s,s,nw,s,s,s,s,sw,s,s,s,s,s,s,s,s,s,s,s,sw,nw,s,s,se,s,s,s,s,s,s,sw,s,s,s,s,s,s,s,s,s,s,s,s,s,s,s,s,s,s,s,se,s,s,nw,s,s,s,s,s,s,n,s,s,s,s,s,s,s,s,s,s,s,s,s,s,s,s,s,s,s,se,s,sw,s,s,s,s,sw,ne,s,ne,s,ne,s,s,s,s,s,n,s,ne,sw,s,s,n,s,s,s,s,s,s,s,s,s,s,s,s,s,s,s,ne,se,s,s,se,s,s,se,s,s,se,s,se,s,s,nw,se,s,s,s,s,ne,s,s,nw,se,ne,n,nw,s,s,sw,s,s,s,s,s,s,ne,s,s,s,sw,s,s,se,s,s,s,s,ne,se,s,s,s,se,n,se,se,s,s,se,s,ne,s,sw,s,s,s,s,nw,s,s,s,se,n,s,sw,s,s,s,s,se,s,s,ne,se,se,nw,se,s,s,se,s,sw,sw,s,se,n,s,s,se,s,s,sw,se,s,s,s,s,n,s,s,s,n,se,s,s,se,s,s,se,s,se,se,se,s,ne,s,s,s,s,se,s,se,se,s,s,s,s,s,s,s,s,ne,s,s,se,se,se,s,s,s,s,s,nw,nw,s,s,se,se,sw,ne,se,s,ne,n,se,s,s,s,s,s,s,s,s,s,se,s,s,se,se,s,se,se,s,se,s,se,s,se,s,s,nw,s,s,s,s,n,s,se,sw,se,s,s,ne,se,se,s,s,s,ne,s,sw,se,s,s,s,s,se,nw,s,se,se,se,s,nw,s,s,se,s,sw,se,s,se,s,s,s,s,se,n,ne,s,s,s,sw,se,s,se,se,se,s,ne,s,s,nw,s,sw,se,se,s,se,se,s,se,s,s,se,se,se,s,se,s,s,s,s,se,ne,se,s,s,s,se,s,s,s,s,se,s,n,s,se,n,s,s,sw,se,se,s,s,se,s,s,s,s,s,se,se,s,n,nw,s,se,se,se,se,se,sw,se,se,s,se,se,se,se,s,se,se,se,s,se,se,se,se,se,se,s,se,se,se,ne,s,se,se,s,se,ne,se,se,se,se,s,se,se,s,n,s,se,s,se,s,se,nw,se,se,se,se,se,se,s,se,se,se,n,s,se,se,nw,se,s,sw,se,s,se,n,se,s,se,s,se,s,se,se,n,se,sw,se,se,s,se,s,se,se,se,se,se,se,s,se,se,se,sw,se,se,n,nw,se,se,se,s,se,se,sw,se,s,se,se,n,se,s,se,ne,se,nw,s,s,n,se,se,se,se,s,se,se,sw,se,se,se,se,se,s,nw,se,se,ne,se,se,nw,n,se,se,se,ne,se,se,se,se,se,se,se,se,se,se,s,nw,se,se,se,nw,ne,se,se,se,se,se,se,nw,se,se,se,se,se,se,se,se,se,se,se,se,se,se,se,se,se,se,se,se,se,se,nw,se,se,se,se,se,se,se,ne,se,se,s,se,se,se,se,s,se,se,n,se,se,ne,se,se,n,se,n,se,se,se,nw,se,sw,se,s,se,se,sw,se,se,se,se,se,se,se,s,se,se,se,se,se,s,se,se,se,se,nw,se,ne,n,se,se,se,se,se,se,se,se,nw,se,se,sw,se,se,se,n,se,ne,se,se,ne,se,se,se,se,se,ne,nw,se,se,se,se,s,se,se,se,se,se,se,s,nw,se,se,se,se,se,se,se,se,se,se,se,ne,se,se,ne,se,se,se,ne,se,se,s,n,ne,ne,s,se,se,n,se,se,ne,se,ne,ne,se,se,se,ne,se,se,sw,se,se,n,ne,nw,se,se,s,ne,se,ne,se,s,se,ne,se,se,se,ne,ne,se,se,se,n,s,ne,ne,ne,ne,ne,ne,se,se,ne,se,se,se,n,se,se,se,se,se,se,s,nw,se,s,se,se,ne,n,se,n,ne,se,n,n,se,se,s,se,se,ne,se,ne,ne,se,sw,n,n,ne,se,sw,ne,se,se,se,se,se,se,sw,sw,se,ne,se,se,nw,ne,se,se,ne,se,se,se,se,se,se,se,se,ne,se,ne,se,se,ne,ne,se,n,ne,ne,n,n,se,ne,se,se,ne,ne,se,se,se,n,se,se,se,n,se,sw,se,ne,n,n,se,se,nw,ne,se,nw,se,se,sw,se,se,se,ne,se,se,se,ne,se,se,se,sw,n,ne,ne,se,nw,ne,se,se,n,se,se,ne,se,se,ne,se,nw,ne,se,se,se,nw,n,se,se,ne,ne,s,ne,se,ne,sw,se,se,se,se,s,se,se,se,se,ne,n,se,sw,se,ne,ne,se,ne,sw,ne,se,se,ne,ne,se,se,se,ne,sw,ne,sw,ne,n,se,se,se,nw,ne,se,ne,ne,se,ne,se,ne,s,se,ne,ne,se,se,se,ne,se,ne,sw,ne,se,sw,ne,n,se,ne,se,se,nw,ne,ne,se,ne,ne,ne,ne,ne,s,se,ne,se,se,s,ne,ne,se,ne,ne,ne,nw,ne,ne,ne,se,ne,se,ne,se,se,se,ne,se,se,ne,se,se,se,ne,se,se,ne,ne,ne,se,nw,nw,se,ne,s,se,se,se,se,se,n,s,ne,ne,n,ne,ne,se,se,ne,ne,ne,ne,ne,ne,se,ne,ne,ne,ne,se,se,se,se,n,ne,se,sw,se,se,ne,nw,s,nw,se,ne,se,ne,sw,se,sw,n,n,s,ne,ne,nw,se,se,sw,se,se,se,se,se,n,ne,se,ne,se,nw,ne,ne,se,nw,se,ne,se,ne,ne,s,se,ne,ne,ne,se,se,ne,se,se,ne,s,ne,ne,ne,sw,ne,se,se,ne,n,se,ne,nw,se,ne,nw,se,ne,ne,ne,nw,se,se,se,ne,se,n,ne,ne,se,n,nw,se,se,sw,sw,ne,nw,ne,ne,ne,se,s,ne,sw,se,se,ne,ne,se,ne,ne,ne,se,sw,se,ne,se,se,ne,ne,n,ne,se,ne,ne,s,ne,ne,ne,ne,ne,ne,ne,se,ne,ne,ne,ne,ne,se,ne,sw,ne,nw,ne,ne,ne,ne,ne,ne,ne,ne,ne,ne,se,se,ne,ne,ne,sw,sw,ne,ne,nw,ne,ne,ne,nw,ne,se,ne,ne,ne,n,ne,sw,nw,ne,se,ne,ne,ne,s,se,ne,n,ne,ne,ne,ne,sw,ne,ne,ne,se,ne,se,s,ne,nw,ne,n,se,ne,ne,ne,ne,se,ne,ne,ne,se,ne,ne,ne,ne,se,ne,ne,ne,ne,ne,ne,ne,ne,ne,ne,ne,ne,nw,ne,ne,ne,ne,s,ne,ne,ne,sw,ne,n,ne,ne,ne,ne,ne,ne,nw,ne,ne,ne,sw,ne,n,ne,n,sw,se,ne,sw,ne,ne,ne,se,ne,ne,ne,nw,ne,ne,ne,s,ne,se,ne,s,ne,ne,ne,ne,ne,se,sw,ne,s,ne,ne,n,ne,ne,ne,nw,n,ne,ne,n,ne,ne,s,ne,ne,se,n,ne,ne,ne,sw,s,ne,se,ne,ne,ne,ne,ne,sw,ne,ne,s,ne,n,ne,ne,ne,ne,ne,ne,ne,sw,s,ne,ne,ne,n,nw,nw,ne,ne,ne,ne,ne,ne,ne,ne,ne,ne,ne,sw,ne,ne,se,ne,ne,ne,ne,ne,ne,se,se,sw,sw,ne,ne,ne,ne,ne,se,ne,ne,ne,sw,ne,ne,ne,ne,ne,ne,ne,ne,ne,ne,ne,ne,ne,ne,ne,ne,ne,ne,nw,n,ne,ne,ne,ne,ne,sw,nw,sw,ne,ne,ne,nw,ne,ne,ne,ne,ne,n,ne,ne,ne,ne,ne,ne,ne,ne,ne,nw,n,ne,ne,ne,ne,ne,ne,ne,ne,ne,ne,sw,ne,ne,ne,sw,n,ne,ne,ne,ne,ne,ne,ne,ne,ne,ne,ne,ne,ne,ne,ne,ne,ne,ne,nw,sw,nw,ne,ne,ne,ne,n,n,n,s,n,ne,n,ne,nw,sw,s,n,ne,ne,ne,se,ne,ne,ne,ne,ne,ne,ne,ne,ne,ne,ne,ne,ne,n,ne,ne,ne,s,s,s,ne,ne,ne,ne,ne,ne,ne,ne,ne,n,ne,ne,ne,n,ne,ne,ne,se,ne,ne,ne,nw,ne,ne,ne,ne,s,ne,ne,n,ne,ne,n,ne,n,ne,ne,ne,nw,nw,ne,ne,ne,s,ne,ne,se,n,ne,ne,ne,ne,se,sw,n,n,ne,n,sw,ne,n,ne,ne,s,ne,ne,se,ne,n,se,ne,ne,nw,ne,ne,se,ne,n,ne,ne,sw,ne,ne,n,ne,ne,ne,ne,ne,ne,nw,ne,ne,ne,nw,n,n,ne,n,ne,n,sw,ne,ne,n,n,ne,ne,s,ne,sw,s,nw,n,ne,n,ne,s,n,n,n,n,ne,s,ne,ne,se,sw,ne,n,n,n,s,ne,n,ne,ne,ne,n,ne,ne,ne,se,ne,n,ne,ne,nw,ne,sw,n,n,sw,nw,n,se,ne,ne,ne,se,n,ne,n,n,ne,ne,n,ne,ne,ne,ne,n,n,ne,ne,ne,n,n,ne,nw,ne,se,ne,ne,ne,ne,se,ne,n,ne,n,n,ne,n,ne,se,ne,ne,se,ne,n,n,ne,ne,ne,ne,se,nw,nw,ne,ne,ne,ne,n,ne,n,ne,n,ne,n,ne,sw,ne,ne,s,n,ne,ne,n,n,ne,sw,ne,n,ne,ne,n,ne,se,ne,se,n,ne,n,sw,ne,n,ne,s,n,ne,ne,ne,ne,ne,nw,n,s,se,n,n,n,nw,ne,ne,ne,n,ne,ne,ne,ne,ne,ne,ne,se,ne,ne,ne,ne,ne,n,ne,ne,ne,ne,n,ne,ne,n,se,ne,sw,ne,ne,s,se,n,n,ne,s,nw,n,ne,ne,n,sw,se,ne,ne,n,n,n,n,n,n,ne,sw,ne,ne,n,ne,ne,n,n,n,nw,ne,n,ne,n,ne,n,s,ne,n,n,n,n,ne,ne,ne,n,n,s,ne,ne,s,se,ne,ne,nw,n,n,n,ne,ne,ne,nw,se,n,ne,nw,ne,n,ne,ne,ne,s,n,ne,se,n,n,n,ne,ne,ne,se,n,n,ne,n,n,ne,sw,ne,n,n,n,n,n,n,ne,n,n,sw,n,se,n,n,n,se,ne,ne,n,s,se,nw,ne,ne,ne,n,ne,se,sw,n,se,se,n,ne,n,n,n,n,ne,n,ne,n,nw,ne,ne,n,sw,ne,n,sw,ne,ne,ne,ne,ne,n,n,n,ne,n,s,s,n,nw,ne,sw,n,nw,n,ne,ne,ne,n,ne,n,se,n,n,n,ne,ne,n,s,n,n,ne,ne,n,s,n,n,n,ne,n,n,ne,sw,n,n,s,n,n,n,ne,se,ne,sw,ne,ne,sw,n,n,se,n,n,n,ne,ne,n,nw,nw,n,ne,n,ne,n,se,ne,n,n,ne,n,ne,n,nw,n,ne,sw,sw,ne,sw,ne,ne,n,n,s,n,ne,n,se,ne,n,n,n,n,ne,n,n,n,n,n,ne,n,n,n,n,n,se,sw,se,n,ne,n,ne,sw,n,ne,n,n,ne,ne,n,n,ne,ne,ne,se,n,n,nw,n,se,n,ne,n,n,s,s,n,ne,n,n,n,n,n,n,n,n,n,ne,ne,n,ne,n,ne,ne,s,n,se,n,se,n,n,ne,s,n,ne,n,ne,n,ne,ne,se,s,sw,n,se,n,se,ne,n,n,n,ne,n,ne,n,ne,sw,ne,s,sw,n,sw,n,ne,ne,n,se,n,n,n,ne,ne,nw,n,n,ne,n,n,n,n,n,ne,ne,n,ne,n,n,n,n,ne,n,n,sw,n,n,n,n,n,ne,n,n,n,sw,ne,ne,n,sw,s,n,n,n,n,n,n,ne,ne,ne,n,s,ne,n,sw,s,n,n,n,se,n,n,n,n,n,n,n,n,se,n,ne,s,n,n,nw,n,ne,s,n,se,sw,n,n,ne,n,ne,sw,n,n,n,n,n,nw,ne,n,n,ne,ne,n,ne,se,nw,ne,n,n,n,ne,nw,n,n,se,n,n,ne,n,n,s,se,ne,se,sw,n,nw,n,s,n,n,se,se,n,n,n,n,n,n,n,n,n,n,n,sw,n,n,ne,nw,n,n,sw,sw,s,ne,n,n,n,n,n,n,n,n,n,s,n,nw,n,ne,s,n,sw,n,ne,s,n,n,sw,n,n,nw,s,se,n,n,s,n,n,n,n,n,n,n,n,n,n,n,sw,ne,n,ne,sw,nw,n,n,s,n,n,n,n,n,n,n,n,nw,nw,n,n,n,ne,se,se,n,n,n,nw,se,sw,n,n,n,n,n,n,n,n,n,se,ne,n,n,n,n,n,n,n,nw,n,s,n,n,n,ne,n,n,sw,n,n,n,n,n,n,n,n,n,n,se,n,n,n,n,n,n,ne,n,n,n,n,n,n,s,n,n,n,n,sw,sw,n,n,n,n,n,n,n,n,n,n,n,n,n,n,n,n,nw,n,s,ne,n,s,n,n,n,sw,n,n,n,se,n,n,nw,n,n,n,sw,n,n,n,n,n,n,s,n,n,n,n,ne,n,n,ne,n,n,s,n,n,n,n,n,n,n,n,n,n,n,n,n,n,n,s,n,n,n,n,se,n,nw,n,n,n,n,n,n,n,n,n,n,n,sw,n,n,n,n,s,n,nw,n,n,ne,n,sw,n,sw,n,n,n,n,n,nw,nw,ne,nw,ne,n,n,s,s,n,n,n,nw,nw,n,se,n,n,n,n,n,n,s,sw,n,n,n,n,n,n,n,n,n,n,se,n,n,n,n,n,n,n,nw,n,n,n,nw,nw,n,n,nw,n,ne,n,n,n,n,sw,n,n,n,n,ne,n,nw,se,nw,n,n,ne,s,se,n,n,n,nw,nw,sw,n,n,n,se,n,n,n,n,n,n,n,n,n,n,se,n,se,n,n,se,n,n,n,nw,n,ne,n,se,n,n,ne,se,n,n,n,n,n,sw,ne,n,n,se,n,n,n,n,n,n,se,n,s,n,n,nw,n,n,s,n,n,n,n,n,n,n,n,n,n,nw,n,n,n,n,n,s,nw,n,n,n,s,n,n,n,n,sw,n,n,nw,nw,se,n,n,n,nw,n,n,n,nw,ne,n,n,nw,n,se,n,nw,nw,nw,n,nw,n,s,n,n,nw,nw,se,n,n,s,nw,n,n,se,n,n,n,nw,n,n,n,n,sw,n,n,nw,n,n,n,n,nw,nw,n,n,n,n,n,n,nw,nw,n,nw,n,n,n,n,sw,n,n,n,n,n,sw,n,n,n,n,n,sw,n,n,n,n,n,n,n,nw,n,n,s,nw,n,ne,n,n,sw,sw,se,n,s,n,n,nw,ne,s,n,n,n,nw,nw,n,nw,n,s,nw,n,n,nw,nw,n,n,n,s,n,nw,n,n,nw,ne,n,sw,s,n,n,n,nw,n,n,nw,n,n,nw,s,nw,nw,n,s,ne,nw,n,n,nw,ne,n,n,n,n,n,n,n,n,nw,nw,n,n,nw,sw,sw,s,n,n,ne,n,n,n,n,n,n,n,n,n,sw,n,n,n,nw,s,nw,nw,n,n,nw,s,n,n,n,n,nw,n,n,n,n,n,s,n,nw,sw,n,se,nw,s,sw,n,n,se,se,n,nw,n,n,n,n,n,n,nw,n,n,n,nw,nw,n,n,n,n,n,n,n,n,n,n,nw,nw,n,n,n,se,sw,n,s,n,se,n,n,s,n,sw,nw,nw,n,se,nw,n,nw,n,n,nw,ne,n,n,n,n,n,n,n,nw,n,n,nw,nw,n,n,nw,se,s,n,n,nw,nw,s,n,n,sw,n,n,ne,nw,n,nw,n,nw,n,nw,se,sw,n,n,nw,nw,n,nw,sw,nw,n,nw,n,nw,ne,n,nw,n,n,nw,n,nw,nw,sw,n,sw,nw,n,n,nw,n,n,nw,se,nw,se,n,nw,nw,nw,nw,n,se,n,nw,n,nw,sw,nw,s,nw,n,nw,nw,nw,ne,nw,n,ne,nw,nw,nw,nw,n,n,nw,n,nw,n,sw,se,sw,sw,ne,n,sw,n,n,n,n,n,nw,n,n,nw,nw,n,se,nw,n,nw,n,n,nw,n,nw,nw,n,nw,nw,n,n,nw,nw,n,nw,n,nw,n,nw,nw,n,nw,s,n,n,n,nw,nw,n,nw,n,s,n,nw,nw,n,se,nw,se,n,n,nw,n,n,n,nw,n,nw,nw,ne,nw,nw,n,nw,n,nw,n,nw,n,nw,nw,n,n,nw,nw,n,n,nw,nw,ne,n,sw,nw,n,s,n,n,nw,nw,n,n,n,n,nw,nw,ne,ne,n,se,n,n,n,s,s,nw,n,s,n,nw,nw,nw,n,n,s,sw,ne,n,n,nw,n,n,n,se,se,ne,s,n,nw,n,nw,nw,n,nw,n,n,nw,ne,sw,n,nw,n,n,nw,ne,se,nw,se,nw,n,n,n,n,nw,nw,n,nw,nw,nw,n,nw,n,nw,n,n,se,n,nw,n,n,nw,n,nw,nw,nw,n,n,se,n,n,n,nw,nw,n,nw,nw,ne,nw,n,s,n,n,n,nw,sw,nw,n,nw,s,sw,n,nw,nw,n,s,nw,n,nw,nw,nw,n,nw,n,n,n,s,nw,nw,n,nw,s,nw,nw,n,nw,nw,nw,nw,nw,nw,nw,nw,nw,n,n,nw,nw,ne,nw,n,nw,se,n,ne,nw,nw,nw,n,nw,n,n,n,n,nw,n,n,n,nw,nw,nw,se,nw,nw,n,nw,nw,s,n,n,n,sw,n,nw,nw,s,nw,n,n,ne,nw,n,sw,n,nw,sw,nw,nw,nw,nw,nw,s,n,nw,nw,n,ne,n,sw,se,n,nw,n,s,n,n,n,n,nw,sw,nw,n,nw,ne,nw,nw,n,se,n,sw,s,nw,nw,n,nw,nw,nw,nw,n,nw,nw,nw,se,s,ne,se,n,nw,s,nw,sw,nw,nw,se,nw,n,nw,nw,n,nw,nw,nw,sw,n,n,s,n,n,n,nw,s,n,n,n,nw,nw,n,nw,nw,nw,s,nw,nw,n,n,ne,nw,nw,nw,sw,n,n,n,nw,nw,n,n,n,nw,nw,nw,nw,nw,nw,nw,s,sw,nw,n,nw,s,n,ne,nw,nw,nw,nw,nw,s,nw,sw,nw,n,nw,nw,n,n,s,ne,n,nw,nw,n,nw,n,nw,n,nw,sw,nw,n,n,nw,nw,se,s,sw,se,nw,sw,n,nw,nw,n,n,nw,sw,nw,ne,n,s,se,nw,se,nw,n,n,n,n,sw,nw,nw,n,nw,nw,n,n,nw,s,nw,nw,ne,nw,nw,nw,nw,nw,nw,sw,s,nw,ne,nw,n,s,nw,n,nw,n,n,nw,nw,nw,s,nw,nw,n,sw,nw,n,n,nw,nw,nw,nw,n,n,nw,nw,nw,nw,n,nw,nw,nw,ne,nw,nw,sw,nw,n,nw,nw,n,n,sw,sw,nw,nw,nw,se,nw,sw,n,nw,n,nw,se,nw,nw,nw,nw,nw,n,n,n,nw,nw,nw,nw,nw,nw,n,n,nw,nw,nw,nw,s,nw,n,sw,nw,nw,sw,nw,nw,n,nw,n,s,nw,sw,n,nw,n,nw,nw,n,nw,se,n,nw,nw,n,nw,n,nw,nw,ne,nw,se,nw,s,s,se,n,nw,nw,nw,nw,se,se,nw,s,nw,nw,nw,nw,s,sw,se,nw,nw,nw,nw,nw,se,n,n,nw,s,nw,nw,sw,ne,nw,sw,nw,nw,nw,s,sw,ne,nw,ne,sw,nw,s,nw,nw,nw,nw,nw,nw,nw,se,nw,nw,nw,nw,se,nw,nw,nw,ne,se,n,ne,nw,nw,nw,s,nw,nw,n,nw,s,n,nw,sw,nw,s,sw,n,nw,n,nw,nw,nw,nw,n,nw,nw,nw,ne,nw,nw,n,nw,nw,n,n,nw,s,nw,nw,nw,nw,nw,sw,se,nw,nw,sw,nw,ne,se,nw,nw,se,n,nw,nw,n,se,n,nw,n,sw,nw,nw,nw,nw,nw,n,nw,se,s,se,nw,sw,nw,s,sw,nw,nw,nw,se,nw,sw,s,nw,n,nw,nw,nw,se,ne,nw,nw,nw,nw,nw,ne,ne,nw,nw,sw,ne,nw,nw,nw,nw,se,n,nw,s,sw,s,nw,nw,nw,ne,ne,n,nw,s,nw,nw,nw,sw,n,nw,nw,n,nw,nw,nw,ne,se,nw,nw,nw,nw,nw,nw,sw,nw,sw,nw,nw,nw,nw,nw,nw,nw,nw,s,se,s,nw,nw,nw,nw,nw,nw,nw,nw,nw,nw,nw,nw,nw,nw,nw,nw,se,nw,nw,nw,nw,nw,nw,nw,ne,nw,nw,n,nw,n,nw,n,nw,nw,s,ne,nw,nw,s,ne,nw,nw,nw,ne,s,nw,nw,nw,sw,nw,se,nw,ne,nw,s,nw,se,nw,nw,nw,ne,nw,nw,nw,n,nw,nw,sw,ne,nw,n,n,nw,n,nw,n,ne,nw,n,s,nw,nw,sw,nw,nw,nw,nw,nw,nw,nw,se,se,sw,n,nw,nw,ne,nw,nw,nw,nw,nw,n,nw,nw,s,nw,nw,nw,ne,nw,n,nw,nw,nw,nw,n,nw,nw,sw,nw,nw,n,nw,s,sw,nw,n,nw,sw,nw,n,nw,nw,nw,nw,nw,nw,nw,nw,nw,nw,nw,nw,se,se,sw,nw,nw,nw,nw,nw,s,n,sw,sw,se,se,se,se,nw,se,se,s,sw,s,s,s,s,s,s,sw,sw,s,sw,sw,nw,sw,s,sw,sw,n,s,nw,sw,nw,s,se,n,ne,nw,nw,nw,nw,nw,n,nw,nw,nw,n,nw,nw,n,n,nw,s,n,n,sw,n,n,n,n,n,ne,n,n,sw,ne,nw,n,n,n,n,ne,n,se,n,n,n,ne,ne,n,ne,ne,n,n,se,ne,se,ne,ne,ne,ne,ne,s,n,n,ne,ne,ne,se,ne,ne,ne,nw,ne,ne,se,ne,se,ne,ne,ne,ne,ne,ne,ne,ne,ne,nw,se,se,ne,sw,se,se,se,ne,se,ne,s,ne,se,ne,se,se,se,se,se,se,se,se,se,n,se,se,n,n,se,se,se,nw,se,nw,se,s,se,se,se,s,se,ne,se,se,sw,se,se,se,se,nw,nw,se,se,se,ne,s,s,se,ne,s,s,se,sw,n,se,s,se,n,se,se,nw,s,n,s,se,nw,s,sw,s,s,ne,s,s,s,s,s,s,ne,s,n,se,se,s,s,sw,s,n,se,ne,s,s,s,se,s,s,s,s,nw,s,s,s,sw,sw,se,s,s,n,s,s,sw,s,s,s,n,s,sw,s,s,sw,s,nw,s,s,nw,s,sw,s,s,s,s,s,se,ne,s,sw,s,s,s,sw,sw,s,nw,ne,nw,sw,sw,sw,sw,s,s,s,sw,ne,nw,s,s,s,s,sw,s,sw,sw,s,sw,sw,sw,nw,sw,sw,sw,sw,s,s,s,sw,sw,sw,s,sw,sw,sw,sw,sw,sw,ne,sw,sw,s,sw,sw,se,sw,sw,sw,n,sw,n,nw,nw,ne,sw,sw,sw,sw,sw,sw,sw,s,nw,sw,sw,sw,n,sw,sw,sw,sw,n,sw,sw,n,sw,sw,sw,n,sw,sw,n,sw,sw,se,sw,sw,sw,sw,sw,sw,sw,nw,sw,se,nw,nw,sw,nw,se,sw,sw,nw,sw,sw,nw,sw,sw,sw,nw,sw,sw,sw,sw,sw,sw,nw,sw,nw,ne,sw,sw,ne,s,sw,nw,sw,sw,nw,nw,nw,se,nw,nw,nw,sw,sw,s,nw,sw,n,nw,sw,nw,nw,nw,sw,nw,sw,nw,sw,sw,sw,nw,se,sw,nw,ne,nw,ne,sw,s,sw,n,nw,s,nw,nw,nw,se,nw,nw,nw,nw,nw,nw,s,nw,sw,nw,nw,nw,nw,sw,nw,ne,nw,s,nw,ne,nw,nw,nw,nw,nw,se,nw,nw,nw,nw,nw,nw,sw,s,nw,nw,nw,nw,s,nw,s,nw,nw,se,se,nw,n,nw,nw,se,n,nw,nw,nw,nw,nw,nw,se,sw,nw,sw,nw,nw,nw,nw,nw,nw,nw,nw,n,nw,nw,s,nw,nw,n,sw,nw,n,n,n,se,ne,n,nw,nw,nw,s,n,nw,n,nw,n,nw,nw,nw,n,n,nw,ne,n,nw,s,s,nw,ne,ne,nw,n,s,n,nw,nw,nw,n,nw,se,se,s,nw,n,n,nw,n,ne,nw,se,nw,n,ne,sw,ne,sw,n,nw,n,n,nw,n,n,n,nw,n,nw,n,n,n,nw,n,n,n,nw,sw,n,n,n,n,nw,n,nw,ne,nw,ne,ne,n,n,nw,n,nw,n,nw,n,n,sw,n,n,nw,nw,nw,n,nw,n,nw,sw,n,s,ne,n,nw,nw,ne,n,n,n,n,n,s,ne,nw,n,se,nw,n,n,n,n,n,n,se,n,n,n,n,ne,n,s,n,n,n,n,ne,n,n,n,n,sw,n,n,n,n,n,s,n,n,n,nw,n,sw,n,n,n,n,n,n,n,n,ne,n,n,n,n,n,n,n,n,ne,n,ne,n,ne,s,n,n,sw,n,n,ne,ne,n,sw,n,n,se,se,n,n,s,n,n,n,n,n,n,n,n,n,n,se,n,n,n,n,ne,n,n,n,se,nw,ne,sw,n,sw,ne,n,n,n,n,n,n,nw,ne,n,ne,se,n,n,n,sw,sw,ne,n,n,n,n,ne,n,n,n,ne,n,ne,n,n,ne,n,n,n,ne,se,ne,nw,n,n,n,n,ne,n,n,n,n,ne,n,n,ne,sw,n,n,n,n,se,n,ne,ne,n,n,n,ne,nw,ne,n,ne,n,n,se,n,n,ne,n,n,ne,ne,n,nw,n,nw,ne,nw,n,nw,ne,ne,n,ne,n,ne,nw,ne,ne,n,n,n,n,ne,ne,s,ne,ne,n,ne,ne,ne,ne,n,ne,ne,n,nw,s,s,n,nw,n,ne,ne,ne,ne,ne,n,n,n,s,n,ne,ne,ne,ne,nw,nw,n,ne,n,n,ne,n,ne,ne,nw,n,ne,n,n,n,ne,ne,ne,se,n,ne,n,ne,n,ne,nw,s,ne,n,n,n,ne,n,nw,ne,se,ne,ne,n,ne,ne,ne,ne,se,n,ne,n,n,ne,n,ne,ne,ne,ne,ne,ne,n,nw,ne,ne,ne,n,ne,ne,ne,ne,n,ne,sw,se,ne,ne,ne,ne,n,ne,ne,ne,ne,ne,ne,ne,sw,sw,s,s,ne,ne,ne,ne,ne,ne,ne,ne,ne,ne,ne,n,ne,ne,se,s,ne,nw,ne,ne,se,s,ne,ne,ne,ne,ne,ne,ne,ne,ne,ne,ne,se,se,ne,ne,se,se,ne,sw,n,ne,sw,ne,se,s,s,ne,ne,se,ne,se,se,n,se,ne,se,ne,ne,sw,ne,ne,ne,nw,n,ne,ne,ne,ne,sw,ne,ne,ne,s,se,ne,ne,ne,ne,se,ne,sw,ne,nw,ne,ne,ne,ne,ne,ne,ne,ne,se,ne,ne,ne,se,ne,se,sw,ne,ne,ne,sw,nw,n,se,se,ne,ne,ne,ne,n,ne,ne,se,se,ne,se,ne,sw,ne,ne,ne,ne,ne,se,ne,ne,ne,ne,se,ne,s,se,ne,ne,ne,ne,se,se,ne,se,se,se,nw,ne,ne,ne,ne,ne,se,ne,nw,nw,ne,s,ne,ne,se,ne,ne,ne,se,s,ne,ne,ne,ne,ne,ne,se,ne,sw,se,ne,se,sw,nw,se,ne,n,ne,se,ne,s,ne,se,ne,ne,ne,sw,ne,sw,se,ne,se,se,ne,ne,ne,ne,ne,ne,se,ne,sw,ne,se,ne,nw,se,ne,se,ne,ne,sw,se,s,se,sw,sw,ne,se,ne,ne,ne,se,se,n,se,sw,se,sw,n,ne,se,se,se,sw,se,se,sw,ne,se,ne,se,nw,nw,se,se,n,se,se,se,ne,se,se,ne,ne,ne,se,se,ne,se,nw,s,sw,se,se,ne,se,se,se,se,se,ne,se,ne,se,se,se,s,s,ne,se,se,se,sw,se,se,ne,se,sw,ne,se,se,ne,se,s,s,nw,se,se,se,ne,s,ne,se,se,se,n,se,s,ne,s,se,ne,se,ne,ne,se,nw,s,se,ne,se,ne,se,se,nw,sw,se,ne,ne,se,se,se,se,se,se,se,ne,se,sw,se,se,se,se,se,s,se,se,se,se,nw,nw,nw,s,sw,se,se,se,se,se,s,se,ne,se,se,se,se,s,se,se,se,se,nw,se,se,se,se,se,ne,se,se,sw,se,nw,se,se,se,se,se,se,se,se,se,se,se,ne,se,se,se,sw,se,s,se,se,se,nw,se,se,se,se,se,n,se,se,se,sw,se,se,se,s,se,se,nw,se,se,se,se,se,se,se,se,se,se,se,se,se,sw,nw,se,se,se,se,se,sw,se,se,se,nw,se,se,ne,se,se,se,sw,se,sw,se,n,se,se,se,se,s,se,se,s,se,ne,n,se,nw,se,se,se,se,se,se,sw,s,s,se,se,s,sw,se,se,se,se,s,s,ne,se,se,se,ne,sw,se,se,se,se,s,se,s,s,se,se,n,se,se,nw,se,se,s,sw,nw,se,nw,s,se,s,ne,se,sw,se,se,se,se,se,se,s,se,se,se,se,se,n,ne,s,se,se,se,se,se,sw,se,se,s,se,se,s,se,s,se,nw,se,s,se,se,ne,se,se,se,se,se,se,se,se,s,se,s,s,se,se,se,se,s,se,se,sw,se,se,se,se,s,s,se,se,se,se,se,s,s,se,se,se,se,se,se,se,se,s,s,se,se,se,s,sw,s,s,s,nw,se,se,s,se,s,se,se,s,s,s,s,se,se,s,sw,ne,s,se,nw,se,se,se,sw,se,ne,se,s,s,se,se,s,s,nw,n,se,n,se,se,se,n,s,se,sw,se,n,s,nw,se,se,se,n,se,se,se,s,sw,s,se,se,ne,s,s,n,s,se,s,s,ne,se,se,nw,nw,se,s,s,s,se,n,s,s,nw,se,sw,s,se,s,n,se,s,s,nw,se,s,s,se,sw,s,se,n,se,n,nw,nw,s,s,s,nw,se,se,s,s,se,se,s,s,se,se,s,s,se,n,nw,s,se,se,se,s,se,se,s,se,s,ne,se,s,se,s,se,s,s,s,s,n,s,s,n,se,nw,s,se,s,se,s,se,s,se,s,s,s,se,se,s,s,se,s,s,se,s,nw,s,s,n,se,s,se,s,n,se,s,s,se,s,se,ne,se,ne,s,s,s,s,s,s,s,s,s,s,ne,se,s,se,s,se,se,s,ne,s,s,se,s,ne,sw,s,s,s,s,s,ne,s,n,se,s,s,nw,s,s,se,se,s,s,nw,nw,sw,se,s,s,se,s,s,s,s,s,nw,s,s,s,se,sw,se,nw,s,s,s,s,se,n,se,se,s,ne,s,s,nw,se,s,s,s,s,sw,s,s,nw,s,s,se,s,n,s,ne,s,s,sw,se,s,s,s,s,s,s,s,s,s,s,s,s,sw,se,n,s,s,s,sw,s,s,s,s,se,s,s,se,se,s,s,s,ne,se,nw,s,s,s,s,s,nw,s,s,s,se,s,s,s,s,s,s,n,s,s,s,s,se,nw,s,s,s,ne,n,s,s,se,s,s,sw,s,se,s,s,s,s,n,s,s,s,s,s,se,s,s,s,s,s,s,s,n,ne,s,n,sw,s,sw,s,sw,s,se,s,s,nw,s,s,s,s,nw,s,s,s,s,ne,s,sw,s,s,s,se,s,s,s,s,se,se,se,s,s,s,ne,s,se,s,s,s,se,s,sw,nw,sw,s,s,se,sw,s,s,s,s,n,s,s,s,s,n,s,s,ne,se,s,s,s,s,s,ne,ne,s,s,s,s,s,n,nw,s,s,s,s,s,s,s,s,s,s,sw,sw,s,s,nw,nw,s,se,se,s,n,s,s,s,ne,sw,s,n,s,s,s,s,s,s,s,s,s,s,s,s,s,s,s,s,s,nw,nw,s,se,s,s,s,sw,se,s,sw,s,s,s,s,sw,sw,sw,s,sw,s,s,n,s,sw,s,s,s,sw,sw,s,s,sw,ne,ne,s,s,nw,s,s,s,s,s,s,sw,sw,s,s,ne,s,s,s,s,n,nw,se,sw,n,sw,s,nw,s,s,s,ne,s,s,sw,s,se,s,s,s,n,ne,s,nw,n,s,s,s,sw,n,s,ne,s,sw,s,n,s,s,se,sw,s,se,ne,se,s,sw,s,s,s,s,ne,se,sw,se,se,s,s,sw,se,s,s,se,s,se,sw,sw,s,ne,s,s,s,s,ne,s,s,ne,sw,sw,s,s,n,s,s,ne,s,n,s,sw,s,s,se,s,nw,s,sw,s,s,s,s,s,s,s,s,s,s,n,se,n,sw,s,sw,sw,sw,ne,sw,s,sw,s,s,sw,sw,n,s,sw,s,s,s,n,sw,sw,n,ne,s,sw,ne,s,s,ne,sw,sw,s,sw,s,se,se,s,sw,nw,s,nw,s,sw,ne,s,s,sw,s,s,sw,sw,sw,sw,s,ne,n,s,sw,s,s,sw,s,s,ne,s,se,sw,nw,s,s,s,s,sw,s,nw,sw,sw,s,nw,sw,s,sw,s,n,se,sw,s,s,s,se,sw,sw,nw,s,s,sw,s,sw,sw,sw,s,sw,sw,s,s,sw,s,sw,sw,nw,s,s,s,s,s,s,sw,sw,s,sw,sw,s,sw,sw,sw,se,sw,s,s,s,sw,sw,s,sw,s,nw,s,s,s,sw,sw,sw,s,sw,s,s,s,sw,se,sw,nw,sw,s,nw,sw,nw,ne,sw,s,sw,s,nw,sw,s,sw,sw,s,s,n,s,sw,sw,n,sw,nw,sw,s,s,nw,sw,sw,sw,ne,sw,nw,s,s,s,s,sw,n,sw,sw,n,sw,s,s,nw,sw,sw,sw,sw,s,sw,sw,ne,sw,sw,s,ne,sw,sw,ne,s,sw,s,s,s,sw,s,s,sw,s,se,nw,sw,se,s,s,sw,sw,s,nw,sw,nw,sw,s,sw,sw,sw,sw,s,sw,sw,sw,sw,sw,s,s,sw,s,sw,s,sw,sw,sw,sw,s,s,s,se,sw,sw,ne,s,sw,se,se,sw,sw,sw,sw,ne,nw,sw,s,s,s,n,s,s,sw,s,s,se,s,n,n,sw,sw,s,s,sw,sw,s,sw,nw,nw,s,sw,sw,sw,s,sw,ne,nw,ne,sw,sw,s,n,sw,sw,s,sw,s,sw,sw,sw,sw,sw,s,sw,sw,ne,sw,nw,sw,n,sw,sw,sw,s,sw,nw,se,sw,sw,s,s,sw,sw,sw,s,sw,sw,se,sw,sw,sw,sw,se,sw,ne,se,ne,sw,sw,s,ne,sw,ne,s,sw,sw,sw,sw,sw,sw,s,sw,sw,sw,sw,sw,sw,sw,sw,s,sw,sw,n,ne,sw,n,sw,sw,ne,s,sw,sw,sw,sw,sw,s,sw,sw,n,sw,sw,nw,sw,sw,sw,s,s,s,sw,sw,n,sw,s,nw,sw,sw,s,sw,sw,sw,s,sw,sw,se,ne,sw,sw,sw,se,sw,sw,sw,sw,sw,sw,sw,sw,ne,sw,sw,sw,sw,s,sw,s,sw,sw,sw,sw,sw,ne,s,sw,sw,sw,nw,n,n,sw,ne,sw,sw,sw,sw,sw,sw,sw,se,sw,sw,ne,sw,sw,sw,sw,sw,s,ne,sw,sw,ne,s,sw,sw,n,sw,sw,sw,sw,se,sw,sw,sw,sw,sw,s,sw,sw,sw,sw,sw,n,sw,sw,sw,sw,sw,sw,sw,sw,sw,sw';
    public const Day10 = '120,93,0,90,5,80,129,74,1,165,204,255,254,2,50,113';
    public const Day09 = '{{{{{{{{<!!!>!>!!oiau!>}}<u!!!!,!!,e!!!>\'>}},{}}},{{{{},{}},{{<<<"!!!>!!,,}!!!>\'>}},{<!!{e\'a!!u!!u!!!!!oa\'!!u!>!!eu!!!!!>,<!>},<,>,<}{!!u,!!!>},<!!!>!!!>>}},{{<!}aa!!{\'a!>},<!>,<!>!>,<!u,"aae!>},<>,<!!!>!>u,o!>},<!!!>!!!>,<"<\'>},{{<,!>},<ae{>},<<e!>},<a!!},}>}},{{<>,{<!!!>!>{!>},<!!!!!>},<!>},<!!!>,<!>,<!!o,<,>}},{<{\'>,{{<"{,<!!!>!>!!!>u!>},<ue!!!!u!!\'uua}!!!>},<>}}},{<\'e!!>}}},{{{{},<!>},<!!o"\'!>,<u"<!!<,o{\'a>},{{}},{{},{{<\'!!i<>},<"!!!!,!>{{>},{<i\'<{i>}}},{{{<!!o!!a!!\'!>\'>},<eu!>!}"!>,<}i>},{{<!>},<oe!>},<,\'!!!>,<i!>,<!>,<a!!!>!}!>,<">},{}},{{<e<!>!!o!!!!!>},<,>}}},{{{<uu,\'>,{{<!!!>u!!>}}},{},{{{<ei>},<{!!{!!!>!,"}!!e\'!>}u"a>},{{{<!>!!!>a!><!i!>},<",!a!!a\'"!>,<\'>},{<!!!!!!i<!>},<ie!!!>e{\'!"!>,<<!!o<>}}},{<!>},<!!!!!>!!!,,>,<{!>!!!>a!!>}}}}},{{{},{<!,e}!>,<!>,<!>,!!e{{!oi>,{}}},{{<e!>},<!!"!>!>e!!io!>,<>,{{<!>},<!>{!>!>},<!i!!\'!>!!!e!>},<{">,{<o!>,<!!!>,<"!"!o!!a!>e!!!>a!>!\'a>}}}},{<!>,<!!!!u"a!!\'iu\'<!!<ui!>{>}},{{},{{<e!!!>!!!>!>},<!><!!!>>},{<e!>>}},{{<!"eo!eo>}}},{{{{}}},{{<"\'!e,!!ou!!!>!><{!"i>},<!>},<{>},{<{!!e{ui!!!}i>}}},{{{{{{<!>,<!>,<!>},<>}}},<}!u"!>!!!>!!e!>i}u!>!!!>,!>,<>},{{<,o!>,<!!!>i!!!>,!>!!!>\'}!>i!>,<<!!!>,<<!\'>},{{<u!!\'!!!>,<>}}},{{<u!!!>,<!!oae!i,!>,<a}!!",!!,}{>},{<\'{!>!!<!!!!eae}!!!!!\'>,<}i\'!!!>!!\'}<<!!\'>},{{<>,{<!>},<!!!>,<!>},<!!o!!!>o\'aeo,<!>},<o!!!>>}},{<>}}}},{{{},{<<ui!>{!!!>,<!>,<!!!>>}},{<!o\'!>"!>},<,!!!>\'!!}>,{}},{{<{u!>,<!!}}ei!>o<\'!!!!e<,>}}},{{<!!u!>!!!>i,e!u}ooao!!,!>{<!{>,{{<>}}}}}},{{{{{{{<\'"!!!>!>},<!!!>\'eu!>{<<!>},<!>},<>},{<}!!!>e!>,<u{{!!!>o!>,<\'>}},{{<!e!\'u!!}!}a"!>e,"!!i!!!>!>},<>},<u<!>{"i"e{!!!>>}},{{<!>!!!>e}!>,<!>},<\'i<<!!!>o""!>!!>,<u!>,<,!!!!!>!!!>},<!!}u!>!>},<!!!!!>},<!i!>},<>},{{},{<!!!>!>},<{iu>}}}},{{{{<a!>},<{!i,!>},<!>},<i!>,<{oaa!e!>,<>}},{<uo!!,!>,<!!!!!>>}},{<,!!!!!>!!"}!!,i"<i!!!!uei>,<{\'!>},<}{!>i<>}},{{{{}},{{}},{{{{<"!!o\'u!!!>,e!>,<,ue!!!>!!!>!!!>!!<!>>}},{<a!!!>!>,<!>!>,<!>ai!!>,{{}}},{<!>,<!>,<>,<a>}},{{<{!!!>},<!!a!!!>!!!>,<!!!>!,!!!>!>},<>,{<!>!\'!!\'>}},{}}}},{{{{<!>i,}i,!!!i,<>},<!>,<!ae!!!>{ua}!a!!o!>!>!><>},{{<o"!>uo{"!!au!!u,!<a"!!{o>},<!!!>!!!!!>!!!!!>!!!!!o!!}!>o>},{{{},{{<"<!>},<!!!>!!o!>},<>}},{<,!>},<!!!>u!!>}},{{{<"<>},<!!>},{<!>>,<\'!!"\'}{a!>},<>}},{<ue}a\'!>!!!>,<!!!>!!!>!\'"!!!>},<!<}!>},<>}}},{{{<!!,ia!!<!!!>!{uo!,>}},<,!>,<!!e!!!!!><oo!!ii\'!!!!"\'<a!>},<<>},{{}}},{{{<!>},<}!!!>a>},{<!>a,!>},<!!!!,e!>,<",!"",!!!>ie!>!!{!!">}},{{{{<ea!!!>,<!>},<,!{>},<",!>},<!>!>},<o}!!!>!!!!\'!!!{!>,<{!!"!!u!!}>},{<u!!}!a}u!>,<!!a!>},<{i"a>,{<{!!!>u!!!!!!!>!!!>,e>}},{<u!!!>},<!><\'>,<<!>,<!!{u!!>}},{<o!i{!!!>!!!!e!>},<!<>,<oa!>,<a"\'!<i}a>},{<i!u!!!!!!!>!!{}!>!,!<,>,{<u!!!>!!\'!!!>},<!<i>}}}},{{},{<!e!!u>}}},{{<{!!!>!>},<a!!!>>},{{<!!!>!!,a"e!i!>!!!>!!!!i"!!!!!>iie>,{}},<"{u!,,>}}},{{{<a>,<}o>},{},{{{<!!u>,<!>,<!!u>},{{},{<!>},<!>,<!eee,!!!>},<<!!!>{a\'>}}},{{{<a<,i\'e!>},<\'"iu\'o!>},<!!!>,<!!!>},<>},{<!!"}!>o!,\'!!<uee!>,<!!!>},<io!\'!!!!{e>,<,!!{\'"!!!>>}}}}},{{<!>},<e!!{\'{!!o"!!!>>,<!>},<!!\'!>u!<>},{{{{{<"!!">}}}}}},{{{<u!>!>},<u>}}}},{{<!>},<o!eea"<<{""!!!>>},{<u"e!!!>,<,!!u>,{<{!>},<!!!>e\'}e!!u!>o!!!!ui>}}},{{<ii,!>,<a!>},<!>},<!!{u>,{{<a\'a\'!!iee{!!!>!!!!!>!>i\'o!!\'!!!>!!}>},<{}>}},{{}}}},{{{<!>,<,!!u!\'"!>},<!>i>,{}}},{{<{<!!!!!!i!!iii\'o!!{\'iao!}>},<>}},{{{},{{<"i\'!>},<,!o!>,i>}}}},{{{{{{<i!!!!!!!>"",!!!>"o!,>},<aa!>!>},<i!auo"!"!{{!>},<,o>},<!>},<!e!!!>o!!i!>,<!!!>!!!>u"!>,<a\'!>},<{!>},<!>"!!!>>},{<!!!!o,!!,a!!!!!>,<!!!>},<!<,!>!>,<!!!>,"e!!!>>,<\'!>,<}!o!!!u\'u,}!<eu{}!>},<!>},<}>},{{{<"!>{!>,<!>,<{!!o!>},<!!a},!>},<a,a>}}}}}}},{{{{{{{<!>o!>!>},<!!!>i!!!>ei<<!>,<,o!!!>,<!>},<<>,<u!!}>},{{{{}}},<e!>!>!!eio,>},{{{}},{{},{{<!>},<!>},<!i!i!a!!}"<}<>},<e!>},<!!!>,u!>!{o!>},<ee}>},{{<>},{}}}}}},{{<!>,<!!"!iu!>!!!>"!!,!!!>!>!!!>},<>,{<o!!o!!!>>}},{{{<>}},{}}},{{<ui!>,<i!!!>"!>},<<!>},<e!!!>"!>,<}ui>},{{<!!!!!>""u<{a!>u!>o!>,<,!!!!}o>,{<!!!>,<>}}},{<!>!>},<!!<i!{!!!>!!}>}},{{{<}}>},{<!>},<o{!!!>!!ue!!!>,<i!a!!!>>}},{{<i!!!{a!>,<!!!>"!>!>!!!!!>}>,{<!>!!!>!!a\'!>,<!>,<u!>a!!!!{\'<o>}}}}},{{{{},{}}},{<"a,,!!!>,<!!!>!!!!!!!!!>u<i!{,\',,>,{<u"!!!!!!!>"!!}!>!!!!{,>}},{<">,{<e!!!>!>},<o!>!><,,!>},<e!!!!!"!e\'!>>}}},{{{<}"e!>,<!!"},>},{}},{{{{{{{<"!,!>\',>},{<!!!>!!u,,!!!u!!!>!{e!u!i"}u!\'a{ae>,{<"!>,<\'!>!>,<!>}!}}{{!!!o!!!!!!!>!!e!!\'>}}}},{<!<!!!>u!!<}i!!o!!!>!>,<!>}!\'!!!>,<}>}}},{<e<"}ao!!e!!>},{<}!!"eao!>},<i!!!>,<\'!>"o!>,<>,<!!u<!>!!!>i!>},<>}},{<!!\'}}!>},<!>oa<\'>,<{!a!>,<!{{!>},<!>,<o!!!>},<!!}i<!u>}},{{},{<o!u!>,\'!!!!!!u!e>,{}},{<u!!!>{!>"!!e<!>},<!!<!!}!>},<iu!>},<"e!!a>}}},{{{<<!!{!!!><<!>},<{!!!>!>!!!>\'"!>},<>}},{{{},{<,o!!!>"\'!!i}o>}},{{<!!\'"i!!<>},{<!!}ueau,!!!>\'!!"!!o{!>,<">}},{{<!!!<\'!!}!>,<!>},<e!>,<,!!!!u!\'!!!>!!"u<uia>},{{}}}},{{}}}},{{{<a\'>,{}},{<a}e!!,!>,<u>}},{{<!!\'\'e\'!!!!!>!{!>},<>}}},{{{<!>,<"!!!a!!!>!>!>!>},<!><a}}o!>>}},{{{{{}}},{<\'!a!>,<i\'u!>,<!>u!>!>,<>,<i,u!!!>!!!><u{!o!!!!<o>},{{},<}<!!!<!!!>uoiie!!!>ueo!!!a>}},{{{{},{<>}},{{<!ee!>},<!!!!"u!>!!!>},<{\'a<!!<\'>,<<!!!>,<!>!!a!!e<,>},{{<\'<>},{{},{}},{<<oe>,{}}},{<!>},<!!,!!!!u,!!e<\'!!<e!!!>>}}},{{},<"!>},<<}!>},<u!!}<!>,<}!>,<>},{<{!!!!!!!>,,!!u!>},<""o!!{!\'!!{!>},<i{>,<e<!>!><,!>},<<>}},{<!e"<{!>},<u{!>!!!>}e!!"\'!>,<!>},<"a}>,<!>,<!i!!!>!!aa}>}}}},{{{{},<!><!>!>},<!!!!,uio\'u<!!!>!>},<!>,<i!!,>},{}},{<!o,!!!>,<!>,i!!i!!!><>},{{<eeaou!!!>},<!!"!!u}!\'!!{!}"\'!>},<!>>},<"\'o!>!!!!o!!o<!!!>!>,<!oa{!a!e!!{,}>}}},{{{}},{{<!>{<eo!eu>,{}},{{<a,!!!!<!!!!}!>,<e>,{<!>},\'u{!!!>!>},<!>,<>}},{<<!!!>},<}!>,<u"a{>,<!!!!!>},!uoui>},{<!>},<>,{{<!e!}ui,<eo!>>}}}},{{<!!!>!>},<{!!!>"i!!!!!!{>}}}},{{{{{{}},{{{}},{<,o{ia{a!!!>!i!>},<!!!e>,<>}}},{{<!"}>,{<!>},<{!e!!!>i!!!>e!!!!a!>,<}!}!\'!!!><!!!>},<!!\'o<!>},<>}}}},{{{{{{}}},{{}}},{}}},{{{{<!!oa!,}!ie!>},<<>,<a\'!!,!>e!"{!><>}},{<!!!>}a!!!>{!!a!!!!!>"!>},<oeeai!!i">}},{{<e!!au!!!!oa!!!!"!>},<!>},<u,!!ao!!<!!!!!>!!\'">},{<\'!>>,<}e,!!!>!!!!!!!>"i!!\',!>,<e!!,>},{}},{{{{<,o!>,<,\'<io!!!>},<i{!!{>}},{{},{<}}!!!o!>!>},<!!ae!>ee\'!>}!>,<ie!!!!">}}},{{{{<u,!!!>{,!!aao!>,<>},<!!,{}!>},<!>},<!!u!!!>!!!!a,a!>,<!>,<>},{{<!!i!>},<"}!!!>!!!>!{i"!!>},<!>!i!!!>}e!!<\'o{>},{<>,{{<\'!>!>},<i!>},<{a!>,<!i>},<u!>},<i!>\'!>},<!>,<,!>},<!!uu>}}},{{<<!>},<{!!a,a>},<,ue>}}}},{{{{<!!io,!!!>>,{<i}}ui{!!u>}},<!>},<>},{{<e!!"!!!"!!!>!>},<!!u"!}<!!oi!o}a!!!><!>>}},{{<!>},<\'!>!>,\'!>,<i"o!!!>{!i!}!>,<"!>},<!!!!{>,{<<{,!e!!u\'!!u\'!>,<a!>,<i!o,!!!>{<>}}}},{{{},{{<!>,<<e,>},{<!!!!!>,\'a,\',<!!"!e!,u,>,{<,u!o,!!<,"oea\'!!!>!>},<{\',<>}}},{{<>}}}},{{<!>,<!>,e!>!!<!!!>i!!!>!"!!!>}!>!>},<}a"<!>},<>},{{{<>},{}},{<"!>},<}i!!!!!>\'u!>!!!>,i!!!>}i!>i!>,<a>}}},{{{<o!"!>},<!>},<!!{u!>>,{{<!>,<oi!!!!<!a!!i!>,<>},<!>,<!>},<"e!>,<"!!!>!!!>{!!eia!!!><<!!,>}},<>},{{{{{},{<{!!!>},<>}}}}},{<a"<!>,<!>,<!!!!!>o>}}},{{{<>,<\'!!,oa!}eu,!>},<{ea,!>,<!!!>,<"">},{{{<!!\'u}i!!!>}}!!i!>,<!>,<{!,i<o>},{{},<u}ee!!ai!!<!a!>!o!!o>}},{{<o}o!>},<i!<!!!><!>,<!>,<!!a!u>},{<{a!!!>u}u!}"!>},<!>,<e!>},<!!!!!>},<}!"!!}>}},{{{},{<a!>,<<i!!e!!ou,!!!>iu!{oo>}},{{},{<}"!>!i!>>}}}},{{<,<o!!\'<<>}}},{{{{{<!>,<u{!!!>!>,<!!!!!>!!<!!!!i}!!a!>,<{!>},<o!>!!!>!!>,{<!!!>!>>}},{{},{<{,!>},<!!!>!!e!>},<!!!!{!!!>}!<o>}},{<!"!>,<}!!!!!!!>},<{!!a!>},<a!>u!!\'\'<{>}},{{},{{{{<!!o!!io!!a!!i!>,<"i<!}<!<i!>},<io>}},{<<!!<"<!>"!a!>,<!>},<>}}},{<>,{}}}},{{<u!!!>>,<"e!!!>u\'!>},<\'a!>{!>,<i!"\'i>},{<a<!!{!o!!!>>,{}},{{}}}},{{{<}ao!!!>e!>!>,<!!!>!>,<!""a!!!>}}o!!!!!<">,<}!ia<o!!!!e!>,<>},{<{<!>},<!>>,{}},{{{{{<,ou<<u!\',<"!>,<!!i!!!>}o>}}}},{<oia"a,i}>,<!!!!!!!>!!!>},<!!a>}}},{},{{{<!>},<!>o"!>,<!>,<!>},<},<a!eo!!!>"a<!>},<{>},{{<!}!>,<au!>,<\'<o!!!>i!!!>},<}!a">},<!>,<!!{!!!>}i\'u!!!>,<!}!!!!!>\'!>!!">}}},{{{{<i!u}!!!>!>,<e!o{>},<!!!><!>!!o,>},{{}}},{{{<>}},{{{<"ou{u!}<}"!>,<i!\'!"!>!!!}!>>,{}},<!!!!!!!>,<!!!!i!>,<!o!>,<<!!!!!>\'e!!!>au>},<!!!>,<{}!!!>o!>,<!!}!!a>}},{}}},{{},{{<>},{{<!!!!!>"!!!><,!!!>o>}}},{{<!!!>u<i!!}}o!>!!o!>a\'!!>},{}}},{{<!!!>,<!o!>},<!!!><u!!a},\'u\'o!a!>,<a!>>,<i\'!!u\'!!!>a!!,<<!>,<!!!>o!o!!!!!!!>>},{{{<",<!u!!!>,<u!>>}}},{<i!>!ai!!!i,a!>!!{o"!!ua!!!>!!<>,<o!!!>,<u!!i"ui\',!>,<"a!>},<o!!!!!\'!>},<>}}},{{},{<<!!\',"!!!>e!!"{>,{<"!!"!>},<!>a{!>},<o"}!!!>,>}},{{<!!"eu>,<!>},<!!au!!!!!,"a<,>},<i!aou,aoe{ee>}},{{}}}},{{{{{{<o!!!{o>},{<>}},{{<u!!!!!!!!!!oa!>},<aaua"!>},<>},{}}},{{{{{<"!>\'!>},<ui<{oa}!>},<{!>!>},<!,\'\'!!o>},<<"!>},<!>},<,!!"!>},<!!>},{}}},{},{{<!>},<"!!!!!>"!!,!>},<!>ii!!!><!>",uo\'">},<,!!ua\'!!u"au!!{<ee!o"!>},<!>,<!!!>,<>}},{{<!>}o,!!}>,<!>!>},<e!e!>},<,!!!><u!>,<>},{}}},{<<}!>,<a!!!>>}},{{{<}>,<>},{<},i>,{{<!!!>i!>},<!!\'e!>},<!!aa"o<<"!>},<!!oo>},<,\'!!!>eu\'!oai\'!>,<{!>,<!>},<!!>}}},{<!auuu!>},<aau!!!>!!a>,{<!!"<}!!"!>}\'!>,<>}},{{},<oa!aa!>,<!!!>},<>}},{{<!!{!>!!{!>,<o!!!\'"!!ea!!!>>},{{<!!!>},<o!>,<!>,<>},{<,{!!>}},{{<{}!>},<e!><e}!!!>},<!!!!!>e>,<!{}aeeoo{>},{{<!!!!!>!>i!!i>},<ei!>},<>}}},{{{{<{e!u{!!\'\'!ie!>},<\'!<!!!!,!>,>},{{}}}}}},{{{{},{{{{{},{{<!!o!>,<!!!>e>},<,}">}}},{{{{<!!!>\'eo!!{!!!>"o\'\'>},{{{{<!!o!!<!><!!!>!!!>,<!e\'i<!!!\'a\'{!!a!\'!>,<>}}},{}}},{{<!aa>},{<{i!au,o!<!>,<{>}},{{<!a!!u>},<{\'!!"!!!>>}}},{{<!!!>{uu"o!!a>}}},{{{{{{<!!u!!\'!">},{}},{},{<>}},{{{<}!!i!!!!aauu\'>},<\'}!>},<ao!!!>!>},<!!!>oiao}!}!>!!>},{<u\'!>},<euo!!!>},<!>,<!!!>{\'>},{{<!!!!!>,!>},<!,e!,>},{<!!i!!!>!!!!!!>,{}},{{<!>},<!>},<!!!!!!u!>},<e>,<!{u"i,i{!!<{e>},{}}}},{{{<}!>,<,o"\'!eu<!!ii>},<!>!>,<!><}}\'e!{!!i!o!!!>!>>},{<!>,<{!!!>,a!>!!!!!e,a>}},{{{{<!>},<i!<!>\'!!!!o!eii!>,<!>i}i!!!>},<>}},<!!!>!!\'!>},<<!!!>"{eio\'!}{<u>},{{{}}},{}}},{{{},{{<\'!<>},{}},{{<}!e{e!!!!!>},<"i!!\'!!!!!}"i!!e"!>,>},{}}},{<"!>},<!!!>},<}o\',!eoae!!e,u!>,<i!>},<>,{<!!!>ei<!!!>!>},<}eo!!!>!>"i!!}!!">}},{{{{}}},{<"o<!!i!!{!ua!!o>}}},{{{<"!!!!!>!!!>},<>},<}}!>o<!!<!!!><!}oeoi"!!i!>,<a!>>}}},{{}}},{{{<<ae}!><!!"i!!!!e!!!>,<!>!!!>i!>},<,a">},<>},{{{},{<}}{e{!!a!>},<!!!>>}},{{{<i!>",!{a>}},{<o!!,a!!!>ou!>},<>}},{{<>}}},{{{<!a!>,<!!}{!!"o!!!!a\'u,!!!!!!uu!>,<!>,<<>}}}},{{{<!!<!>}!!{ua!>,<,e!>,<a!!!>>,{<{,u!>!>},<i}!>,<>}},{{{<!"a!>,<>},<\'i,!>},<{!>},<!>},<!u!>,<oo{!!!{{>},{{<!>},<!>!!u!>},<>,<,o!>,<>},<e"!!!>\'{!>!!<\'{!>u>},{}}},{{{<<!}i>}},{{{<u">}},<a,{!!!>!eae<>}},{{<ioa"<>,<>}},{{{{<<a,!>u!!!>!>},<\'!>,!o!!!><iu!!!>,<i<>},{<}u,!!!>a!!!>>}}}}}},{{{{<}!!o\'>}},{}},{{<!!i!>,<!!}a!>},<!>,<"!!!>,<\'!!!,a}!!!!}>},{<ooei!u!!!!!>}}!!a!!!>!!!>,<eu>,<!>},<o!!!>e!!!!!>!!{!!!>!,a!!!!ou!ai{<u>}}},{{{{<o}{{>,{<>}},{{},<{!!!!{!!!>},<}!!!!!!!>!!\'u>},{<i{!a{a!!,{}o<"i>,{<a!!!>!>},<<iui!!{"<!!!>!>,<,>}}},{{<ue}\'{!>!>},<>},{}}},{{{<,<a!>!!!!!!!>{u!!,!>>},{{<!{\'!!!!!!i!!!>oo!>},<{!!!>,<a}!>!!ie>}}},{<}!>,"ao\'!>!!!>{a\'\'<aia>,{<u>}}},{{{<""!>},<!!i!>},<"u>},{<!>},<{"!!!>{{!!!>a!!oii{!>},<"!>,<!!o>}},{<"!!!!!>e!!\'{!>},<\'>,<u!>},<!!}!>},<e!!!!!!}e!>,<e!!"!}!!,>},{{<<!>},<\'e<"}>},{<o!i!!!!!>,<!!!>,<,,!>{!!!>,<!!!>,{"!}>,{{<o!!!>u!>},<ea!>},<u!>},<i>}}}}}}},{{{{},{{<>}},{{<!o!!!!!,!>!>>,<!!o!!\'!!ei<e!!!>!!!!i{!!}!!!>},<e\'\'!\',\'>}}},{{}}},{{{<}u!>,<e!!!>!>},<e!\'a!>e<!!{>}},{<\'!!iu}{u!>,<!i!!!>!>,<!!i!>>,{{<!>,<<!!<a"o>},{{<!>!>,<i!!}<u>}}}}},{{{<>,{<!!\'{!>,<\'\',{}!>},<>,{{{{<}!!a!!>}},{<!!!!!>>}},<>}}}},{{<{{!>},<>},{},{{<!!,!!!>\'!!!>}!<>,{<!!<!!!>ei!!!>!!!>a\'"o!!!>,<a!>!!!><!!aa!!>,{{<oi!!\',!}}o!!!!!!eo!>},<!{!!i>},{{{<"ioa!>},<a!>i}ueo>}},{{}}}}}},{}}}},{{<ao>,<!>},<>},{{<}ao!!!>!>!!>}}}}},{{{{{{{<i!!!>o!>,<!!"u>}}},<!!!!!>o!!"u"\'!!!>!>},<!>,<!!!!>},{<u\'{!!!>!!!>a,,u!><>}}},{{{{<!!io,!o>}},{{<!!!>i!>,<e!>,<"i!>!>,<"u!!>},{<!!u!i>}},{{},<o<!>},<ia>}},{{{{<!>},<\'!ua!!!>},<a!!!!}}!!!!"!\'i!!!>u>,{<\'!!"e{\'!>},<!!{"\'!>,<a!!!>>}},{{{<>},{<<a!!!>e!!!>u>,{<!!!>,<}<ii!!!>!>},<,\'!!!>},<oa!"iu<>}}},{{{{{<!>,<>}}},{{<,,!!!>iu,!>},<"i!>,<<i!!,a,ei>,{<!!\'!!\'i!o!>\'!!!o!>},<!!{!>},<{!!o!>},<,>}},{}}},{{<i"u!>!<"!>,}!!!>a>},<!e!>},<u!!{!!{uoe{!>,<e!!!!!!!>!!!>>},{{<i},}",,!>},<<\'>}}}},{{{<!>,<!>,<u!!i!!!>{>}},{<!!}o\'o>}}},{{{<!!!!,!>},<{!>,<,iae"!!!!,>}},{<,!>""!!!>\'ii{!>,<ouio!>,<!!!>},<}<a>,{<!!!!!>!eu!>},<!!\'!!!>!>},<\'i<{!,o>}},{<oua!""!>o,,e,>,{<<oi{}!,,o>,<>}}}},{{<!>},<!!"ee!!!!a!>,<eo>},<o!!!>!>,<!uieu!><!>},<"!>,<!>},<!>!!!>>}},{{{{{<!!!>},<!>},<}"i!!!><i!>},<u{}!}"\'{o!>u>}},{{<!>,<{!>},<,u!>},<}!!!>!>!{!!!u!!o!>},<>},<!!,\'!>,<!>,<"!>},<<iu}o{!}!!!>u!!u!!>}},{{}},{{<e\'u"!>},<!ei!>},<!}!>!!!!o!!!>},<eo,!!>}}},{<ou}!!!e{u"!a!o!>!>"}!>},<!!!>{>},{{<!!!>,!!u!>,<e<\'}<!!!>,<">},{{<!!u!!!!!>"i!>},<>}}}},{}},{{},{{},<!!!!!}e!!"i>},{{{<<eoi>}}}},{{<,<ie\'<<>,{<<}!>,<ee!!!>!>},<"!o<>,{<!!ie>}}}}},{{{<\'>},{{{<ou!!!!!euu>}},<,,\'!eiu<e{!!\'i!>},<!>,>},{}},{{},{{{{{}},{},{{<!>!""<!>},<,<!>,<o\'o!!u!!,!!>},{}}},{},{{{<e{<}!!,e<!!!!!>i!!!!{>}}}},{{{<>,{{}}},{{{<!!!!}o{}<u\'i!!!>!!!!!i!>},<<>}},<!>,<!!!>!!!>u!>},<{!!{\'i}!>,<!>,<,<!>,<!>},<\'!!",>}},{}}},{}},{{{{{{<!>},<!!ua{{o!!u>},{}}},{<a!>au!!!>u!!i<">}},{},{<!"u!!!>"i!>,<,!}ea{!>,<>}},{{{<}!!"i!!!>!>,<!!!>!!\'>}},{<!a!!,!>!>"\',!!!e<"!!!>,!>},<u>}}},{{{{}}},{{}},{}}},{{{{<<!!!>},<!>,<!!!u\',!!eu!!e>},{<\'!>,<!>>,<oo!!o!>,<}a!>!\'!>},<>}}},{{},{{<e}ai}>},{<",!>},<!>,<a!>!>u!>}\'e<!!!>},<>}}},{{{<!}e"u,a\'!!!!!!!a!>!!!>a,o>,{{<{a{!>},<!!!>>}}},<!!!!\'oe,{>}},{{{{<,!!}!!<"!!{!!\'<!""<<u>},{<!!o!>},<}!!!>!>,<ei!<!>},<!!!,i!!!>i!!u!!!>>}},{}}}},{{{{{{<}o!>},<<<i,}e!>,<!>},<!!<!>!>,<io}!>},<}>},{<!!!>},{!eoe!>,!<o!!!>"a}o>,{}}},{{{{<{!!>},{<u!!!!!>o!!!>!}!!!!e>}},<}!!!>,<a!>,<!\'{!,!i}{>}},{{<u!o!>!!!!!>!>},<!e{e!!i{!!!>\'i!!\'>},{<<oiuaui!>,<"!}!!!>!!i!e!>!!!>\'!!eio>}}}},{{{{<<oo,!,"!!u,!!>}}},{{<{\'ie!!}!!!!e!!!!{!>},<,e\'o!}a,<,>},{{<>,<"!!!!!!!>"!{<u!>,<!!!>!!!>,<!!!>!!<!!<>}},{{{<e!!!!e!>,<!>,<,!>,<",!!{{!!<!!>},{{<{\',e<<>},{<{o{a\'!<{!!!aee!!!!!>!<a!!!\'!>{u>}}}}},{<,>,{}}},{{{<!>}>,{<e!,!!!{o!>\'\'!>},<!>},<!>}a<">}},{<a{o!!{oa!>!>,<\'!>!!!>!!!>e!!!>!>,<!>,<>}},{}},{{{{<!>,<!!!!,}<ae!!<"\'"<o!!"!!!>},<<>},{<{!!","},}{i"!!,i!!"!}!!!>,<>}}},{<u!>"iu{{"!>!!!>!>},<>,<!>},<!>,<o!!!>u<u>},{<>,{}}}},{},{{<}!>,<!!!>!!!!e\'i!}!!<!!!!!>!!!>}!>,<">,<o!>,<!!}>},{<">,{<i!!>,<<u!!!>aa>}},{{<!>!!ee\'!!!!\'!>!!!>,<!>},<!!!!!!!>>},{{<!>},<u!a}!!!>,<!!!>o\'ooa{!>,<{!!!i<"\'>},<!"!>>},{<e!!!!!>!><>}}}}}}},{{{{{<>},<!>,<o"o{!>},<}!!!!ia!!!>!!!ua!>!!!>!{"!>,<o!e>},{},{{{{}},<!,!>!!<,}uo>}}}}},{{{{{{<"!}!>},<<eee!!!>\'!!!>o!!}{}{!!,,!e!!!>>},<!>a""!!!>,<!>,<>},<!!,,!>},<i!!!>!>,<ei!!!>!>,<!!o!<!!!>!!!>}<!>,<<>}},{{{<!>,<!!,"i}!>},<a!>},<!!!>!!!{!e>},<,}!!,!>i!>},<{!>,<ae!e,<oo!>ui>},{<o!!}o!>ia"}!!!>!!,!>,<>,{<au,!>},<o>}}}},{{{<{!>,<>,{<\'!!i!!!>,<}!!ou{!>!!!eoie{u!>},<!}>}},{{{<}!!a>}}},{<!{{i!>},<!!!>\'}!!!>i>,{<{!!!><i!!!>!!!<>}}}},{{{},{<i,!>,<e!!i!>ue!!!>!!}!ui>}},{{{<}!!a!>,<o!a!>,<u,ua!u!u,ai,>}}}}}},{{{{{{},{<}<e!<<>}},{<!"a"o!!!>a!>"!>,<u!!<!>,<!!,,oa>,<o!!{}!>e!>"!"\'{o}aa>}}},{{{<!!!>aa!!\',!>o,!!a>}}}},{{{{{},<,o!!!>!!!>>},{{<!i!\'a!!!>},<i!>,<!!}i>},{{}}},{{{<u!>"!!!>!>,<!!u!!!><{<!>,<}e>,<\'e<,!>,<!>!!!>,<\'>}}}},{{<{i},!!oue!!!>oo>}},{{{<,e!!e,u<u!!"">},<!>!>,<!"!>},<{e!!!>!>,<i!!!>!!"!>,<i!!a!!!<uu>},{{{}},<,o!!!>i}!!,\'o!!,!,!!!>},<,eu\'e>},{{<!>,<}!">,<io!!!!!>},<\'!!a,e{>},<!e,!!!!i!!!<!!!>},<}!!!>,<,!>i!!!>!>,<!!<e!">}}},{{<!>,<!>},<oo>,{<,,!!!>\'o!!<o"}{>}},{{<<a!!!>},<,!{>},{{<",oa"!!!!,!u}!>!>,<>},{<!!a,>}}}},{{{{<!>,<,}i!>,<!>u\'{<e}"a>},<>},{{<<"!\'!!o"{o{!e<oa{a!i!!"!>,<!a>},<i!!!>!}!!,!!!>},<<!>,<!>},<u!>!>,<u!>},<>}},{{<!!!>!>,<!!}!!ai!!!!!u!>!>!"uo{u!!!!!>},<{>},{{{<ai}<o!>a!>},<!!!!i\'!>a>}},<>}},{{<a",{!!u"}!>!!a!!,!!i!!!>,<!!!>>,<<!!<a<!!!"!>},<}e!!!>!>},<{!!!>!!!!o>},<e!!<!!<{>}},{{{<a!!<\'!>,<!!,!!!!o!>},<>}},{{{<},}!i!>!!!!<"\'!>!!!!!<!>},<!!>}}},{<!>},<\'!>,<!>,<!"">}}},{{{{},{}},{<<!>},<!!{!!!>o!!!!!>!<i}"!!ei!>},<!>,<!>},<!>},<e>},{}},{{{},{<>}}},{{<!\'<!!!"<!!!!!>,i!>!>i!>e>},{{{{<euo!>,<io!!,e!>,<>,<uu!!"u!!{!!!>i!}{!,!>,<a>}}}},{{{{<!>,<!>},<i<,!>},<u\'}a,oue!>!!o>}},<a>},{<e!!!>!!ee!>!}!!!!!>!!!>,<!!!>{}"ua<,!>},<>}}},{{{<!>,<!>,<e!!!><o!>!!!>,<u!>u<o!>},<!!!\'}>,{<ia!!!!>}},{<!!",a!!!>!\'!a}!!!>{!>!!}!!ooi!!!>!<>}},{{},{<eao!!!!i!>i!!{!!<e!!!>>,{<ee!!!>},<"\'oa{"!!",!!o!>}>}},{{{{}},{{<>},<\'{{!>},<a,\'!!"\'!!!!>},{{<\'e",>},{<!!{\'!u!>,<!,!!!>},<!!a!>!>},<"!!<!!!>},<!}\'>}}},{<!!!>},<!>},<"!!!><!!!!!>a!<o!!!>\'!>aa!>,<!!!!!>},<!>>,<,e!><a!>},<e!oo!!!>o!!\'!>},<{>},{{{{},{<!>,<u<!>,<"<!>!!"{\',<!!!!!>},<<i!>,<>}},{<!>,o!o{u>,{{<u{a!!}>}}}},<<e!!,ee>}}},{{{{},{}},{{<!>},<auu!!!>u}!>,<{{!>},<},}!>,<!><o>,<ii"uu!>,<uua}}<\'aai>}}}}}},{{{},{},{}}}},{{{},{{{{<<!>},<e{oaoo,!!<!!}<!!!><!>,<<"!!a!>,<>},{},{{},<!!!>"!!<!!!>!>},<!!a!!o!!!>o!!!>o>}}},{{{{<"u<!>,<",!>},<aa!\'!!>}}},{{{<<}"!o"!!!!e>}},{{{<!>a}\'>}},{{{{<>}}},{{{<<i}>}}}}},{{<ei!,a,!>!!<e"<a\'{>,{<!!i!}eeu!>},<"!a!<,i!!e\'i,!!<>}},{{}},{{}}},{{<!!e{{!>},<{<}ei>,{}},{{{<!!!>!!\',"ei!>!!!o!!!!!<\'u{!>},<!!">},{<"!o!>,<e"!>,<!>,<>}},{<!>},<i},,!><,!!!>a>,{<!!{}e>}},{{{<{}!ei>},{{<!>,<!!!>io{i!!e!>!!},!!u!>u>}}}}},{{{{}},{<a!e!!}<"!!!>,<>}}}}},{},{{{{<\'{{!!{!uu,}{>},{{<!\'e{!>,<ee!!!>!!!{{!e!!!!<a,>}},{{{<!!!>!>uo!>},<!{\'i<!!!>!>\'<e">},<{o!!\',<>},{}}}}}},{}}},{{{{{<{!!>,{<uo!a!>},<!!i!eio"!"!>,<!!i!>,<{>}},{<i!!!>!!!>i!>},<,,}e>,<uoa!!"!!!>!!!!!>},<iee"!ai!>},<{{,>},{{{<ui}!o\'!!!>!>,<!!!>o!!u>},{<ii,e>}}}},{{},<oi!>,<e,!!!!{!!u!!!>{,!>oi>},{<!!a<}o!>,<o!!!>!!!>!!!>,<{"!!,o{!>,<"!\'<>,<{!>},<!!!!!!!>>}},{{{<a!!e\',!!!>!!!>o!!!!!>ei!>>}},{{<aou\'}}!}>},<!>i!!!!!>e,e\'!,!>!!i!!u">},{<!!o!!>,{<e!i\'!!!>,<>}}},{{{<!>},<!>,<!!"{!>,<!!!>\'>,{{<!!<!a!!!!!>!!!!!!!>,<!>!>,<,!>>}}}}}},{{{},{{{<ea!!!>},<u,>,<\'!!!!!>},<{!}!>},<!}!!e}o>},{<!!u!{!>,<!!>}},{{}},{<>}}},{{<!!!>},<!>i}!!}iou}>,{}},{{}}},{{{},<>},{{<>},{<!>!>},<!>},<"i""}{oi,o>}},{<!>},<!>iu\'<"!>},<,!>},<!<!!"!>,<"a}<!>},<\'>,<!>!!!!!>eu!>!>},<!!!>!>{>}},{{<,!!ee"u!!!>a}!>,>,<"<"\'"i!"!>ei>},{{{},<,!>!!}}!iuo!>>}},{<!!!>!!!>!>!>},<\'!o,{!a!>},<\',"<!!!!oe\'>}}}}}}';
    public const Day08 = <<<DAY08
oui inc 550 if p <= 3
abh inc -189 if g == 0
kq inc 164 if znl != 7
kq dec 827 if oui == 550
z inc 469 if znl != -9
ey inc 685 if tk == 0
kq dec 388 if y > -7
kq inc 468 if tk < 4
oui inc 831 if un <= -5
tk inc -676 if tx >= -8
z inc 418 if kq <= -576
id inc -316 if p >= -2
y inc 943 if g <= -2
g inc -646 if h <= 4
tx inc 47 if tx <= -10
un inc 486 if l < 9
id inc -796 if l < 3
ekl dec 269 if id < -1109
ekl dec -503 if tk > -685
oqg inc -704 if lb < 1
hpz dec -256 if c >= -1
y dec 320 if kq <= -577
znl dec -741 if g != -644
lb inc 584 if id > -1103
p dec -280 if p >= 7
z dec -389 if oqg < -698
a inc 61 if p == 0
hpz dec -184 if id > -1118
id dec -33 if ehe <= 6
oui inc 994 if l <= 9
a dec -548 if ey >= 676
p inc -434 if h != -8
un dec 464 if lb != 0
xj inc 285 if oqg <= -702
h inc -758 if a < 601
tx inc 465 if tk < -674
hpz dec 393 if ekl == 236
id dec 0 if tk < -667
znl dec 802 if ey == 685
l inc 617 if ehe <= 7
c inc 699 if g <= -642
tk inc 27 if c != 691
ehe inc 213 if kq <= -581
x dec 550 if l > 608
c dec -503 if znl >= -61
oqg inc 304 if lb > -7
a inc 262 if un == 486
tx inc 475 if znl != -65
z inc -802 if g != -645
oui inc 301 if lb >= -4
id inc -642 if a != 881
xj dec 394 if kq > -587
y dec -685 if l == 617
id dec -55 if kq != -583
id dec 402 if ehe > 215
h inc 120 if lb >= -3
id dec 492 if ehe <= 216
tk inc 591 if hpz != 441
c inc -790 if h < 128
kq dec 281 if ekl >= 225
p inc 300 if ey > 675
h inc -822 if z > 478
oqg inc -187 if l == 617
kq inc -625 if l == 617
ehe inc 706 if g != -655
oqg inc -489 if c < 409
g dec 603 if kq <= -1486
h dec -903 if ekl < 236
a inc 447 if a >= 868
a inc 448 if l >= 609
oui dec 542 if h == 1023
a inc -377 if lb < 8
oqg dec 417 if oqg == -587
oui dec -348 if y <= 370
x dec 21 if id < -2205
znl inc 206 if znl >= -67
znl dec -230 if xj <= -106
znl inc 913 if c != 412
znl dec 544 if c <= 405
a dec -72 if p < -127
kq dec 495 if tx != 936
h dec -203 if l != 608
hpz dec -764 if a >= 1459
xj dec 57 if lb > -3
znl dec 437 if x > -579
lb inc -473 if ehe >= 916
c dec 354 if y <= 365
h dec -764 if z != 474
lb inc -77 if tk == -58
ey inc 942 if abh != -182
id dec 21 if y > 369
y dec 589 if lb <= -549
hpz inc 792 if lb < -541
c dec 630 if tk >= -60
oqg inc -491 if ehe != 919
x dec -153 if z == 474
lb inc -240 if a == 1461
lb inc -620 if ehe > 917
ey inc 751 if id > -2221
oui inc 896 if h >= 1226
kq inc 531 if ekl >= 231
a dec -381 if znl >= -69
znl dec 659 if tk < -49
xj dec 26 if p == -134
kq dec 929 if oui < 2539
y dec 880 if c < -573
un inc 737 if tk <= -68
ehe dec 497 if l < 622
g inc -193 if kq <= -1453
a dec 695 if l < 618
h inc 526 if ey >= 2388
y dec 769 if g == -1442
znl dec 923 if ey < 2379
x dec -167 if ekl < 235
ekl dec 652 if xj < -192
c dec -352 if z >= 467
abh dec -251 if xj > -202
tk inc -214 if z < 475
x dec 393 if hpz < 2006
hpz dec -941 if xj >= -182
x dec 980 if ekl <= 243
hpz dec 886 if g >= -1447
a inc 157 if oui >= 2540
id dec -694 if ehe >= 413
id dec 137 if y > -999
h dec -24 if a == 1304
id inc 68 if oui <= 2552
p inc -863 if tx <= 944
x inc 221 if h == 1250
l dec 700 if l >= 616
a inc -360 if tx != 939
y dec 797 if x != -1401
c dec -25 if y >= -1798
c dec 401 if lb >= -1409
c dec -164 if znl <= -1647
ekl inc 494 if y == -1787
un dec -432 if oqg >= -1010
c inc 399 if a <= 947
un dec -738 if c <= 204
l inc -863 if y >= -1797
abh inc -125 if znl < -1636
a dec -376 if id > -1592
a inc 392 if z > 470
x inc 281 if h >= 1241
lb inc -264 if kq >= -1458
ekl dec 310 if a >= 1704
hpz inc 132 if lb > -1670
znl inc -870 if xj <= -198
x dec -276 if g >= -1439
abh inc 684 if hpz != 1110
lb inc -214 if l < -945
oui dec -135 if ekl != -76
un dec 188 if ey > 2375
hpz dec -72 if tk != -278
y inc -141 if kq >= -1443
x inc 174 if kq != -1462
ekl inc 325 if h == 1256
c inc 534 if oui == 2547
oui inc 781 if z == 474
lb dec -733 if h == 1250
h inc -441 if un != 1467
id dec -16 if oqg < -1005
ekl dec 842 if ey >= 2369
g inc -995 if a < 1718
oqg inc 313 if tk == -272
a dec -707 if oui >= 3319
hpz inc 957 if y <= -1797
h dec 270 if hpz < 1183
lb inc -632 if g > -2432
c inc -96 if abh < -62
a dec -305 if z != 474
y dec 679 if oui == 3328
tk inc 949 if oui < 3332
x dec 53 if abh < -54
g dec 55 if l > -953
xj inc -327 if abh > -64
abh inc 643 if abh < -55
lb inc -146 if y <= -2461
l dec 763 if y >= -2473
oui dec -787 if a < 2422
p inc 419 if l == -1709
l dec -307 if x >= -1009
c dec 731 if x != -996
y inc 150 if oqg != -682
tx dec -673 if g > -2498
kq inc -895 if l == -1402
xj dec -817 if un == 1468
ey inc 482 if z == 474
h inc -475 if ekl <= -921
hpz inc 526 if l > -1407
znl inc 956 if tk < 680
lb dec -922 if lb > -1304
ekl dec 533 if y >= -2314
g dec -727 if xj >= 291
un dec -7 if ehe == 422
x inc -587 if g == -1765
un inc -786 if c != -83
l inc -238 if h != 542
un inc 267 if znl == -688
z inc -500 if ey <= 2850
l dec 673 if ekl > -921
ey dec 562 if z < 477
hpz dec -179 if oui != 4119
un dec 486 if hpz == 1887
oui inc 649 if tx != 1613
x dec -124 if z >= 472
y inc 807 if z <= 482
y inc 145 if ekl <= -910
xj inc 477 if p > -579
znl inc -472 if tk < 678
y inc 955 if z > 480
znl dec 399 if abh > 576
znl inc -452 if znl <= -1557
z dec 204 if id > -1580
hpz dec -475 if z < 478
id dec -449 if abh <= 576
lb dec 59 if ey <= 2288
lb inc 304 if id != -1587
kq dec 192 if l <= -2309
abh inc 861 if id > -1598
kq inc -240 if p == -578
l dec 246 if a <= 2422
g dec 356 if c > -82
tx dec -341 if tk == 677
hpz dec -325 if h != 535
c dec 377 if l >= -2559
ehe inc 826 if znl == -2011
c dec 989 if xj <= 777
h dec 376 if ehe != 1254
oqg inc -268 if id != -1578
lb inc 816 if ekl >= -921
znl dec 131 if hpz >= 2692
un inc 859 if tk >= 674
p inc 972 if h != 167
tk inc -69 if g == -1765
l inc -787 if oqg == -954
oqg inc -649 if x != -1460
p dec 188 if c > -1459
un dec 411 if xj != 770
kq inc -658 if a > 2415
g dec 396 if y != -1362
ekl inc -220 if znl != -2004
lb inc 711 if lb <= 736
id dec 80 if a <= 2424
z dec -808 if g <= -2152
z dec -201 if p <= 209
a inc -309 if g <= -2161
oui dec -254 if hpz >= 2687
h inc 504 if un < 924
lb inc -231 if y < -1361
id inc 482 if ehe <= 1248
x inc -651 if oqg != -1612
abh inc 516 if tk <= 608
xj inc 30 if ekl > -1140
znl dec -912 if id < -1178
abh dec 419 if z > 1473
kq dec -944 if h <= 672
tk dec 685 if ekl <= -1135
c inc -272 if ehe < 1258
ekl inc 287 if h > 666
oqg inc -993 if ekl > -853
p inc 726 if h >= 674
oui dec -557 if kq >= -2502
tk inc -742 if tk != -81
oqg inc -797 if h == 667
oqg dec -107 if znl < -1093
tk inc 497 if g == -2161
c dec -226 if c == -1727
tx dec 817 if oqg <= -3283
y dec 719 if ey >= 2296
oui dec 42 if y == -2086
y dec -231 if y <= -2078
p inc -190 if ekl <= -842
c dec -533 if znl == -1099
y dec -678 if z >= 1474
hpz inc 591 if ekl != -848
p dec 47 if h <= 676
p inc 729 if tx >= 1136
ey dec -36 if c <= -962
oqg inc -554 if ey <= 2338
tx dec 648 if hpz <= 3281
ey dec -746 if xj <= 805
kq inc -14 if x <= -2106
abh dec 931 if lb != 509
xj inc -230 if p != 697
id inc 458 if l == -2559
l dec -143 if ehe <= 1250
oui inc 411 if y <= -1172
c dec 292 if id < -723
z inc 649 if tk > -326
g inc 161 if abh <= 610
oui inc 23 if c == -1260
xj dec -478 if ehe == 1248
id dec -153 if a < 2112
x dec -616 if tk == -322
xj dec -194 if znl >= -1106
tx dec 220 if ekl < -855
x inc 139 if z != 2141
a inc 777 if abh <= 609
oui inc 151 if x == -1360
g inc 69 if id <= -575
ekl inc 860 if xj <= 1256
x dec 309 if x != -1367
znl inc -405 if y >= -1184
lb inc 428 if tx == 489
znl inc -676 if tx != 497
oqg dec 780 if ey != 3080
un inc 476 if xj > 1240
c dec -982 if l != -2422
x inc 667 if y > -1186
kq dec 277 if tk > -324
oqg dec -271 if kq >= -2792
lb dec 960 if a > 2877
ehe dec 532 if x < -1011
lb inc 619 if x == -1002
hpz inc -585 if tk == -322
p dec 553 if id != -569
h dec 279 if c > -287
oui inc 832 if oui > 5471
kq dec -828 if ey != 3082
xj inc -229 if ehe == 1257
p inc -505 if id != -575
y dec -94 if xj <= 1252
h dec 885 if g > -1923
c dec -38 if kq != -1964
oui inc 19 if l <= -2415
ehe dec 543 if oqg > -3580
lb inc -394 if l >= -2420
tx dec -673 if hpz != 2695
h dec -436 if oui > 5495
znl inc 826 if oui < 5480
znl inc -134 if ey <= 3082
c dec 808 if kq >= -1957
tx inc -45 if abh <= 613
x dec 30 if hpz != 2686
a dec 440 if znl == -2314
c inc -504 if z <= 2140
tx inc 435 if y <= -1075
x dec 256 if ehe < 706
c inc 187 if p != 145
ey dec -323 if id > -576
hpz dec 174 if y >= -1080
oui dec 455 if un == 1394
oqg inc -804 if a <= 2447
abh dec 741 if l == -2416
y dec -566 if z != 2127
kq inc 919 if id >= -575
id dec 220 if znl < -2319
g inc -15 if lb >= 197
abh inc -968 if ey != 3395
xj inc 873 if l != -2415
x dec -367 if x == -1288
un inc -62 if g == -1946
h inc -400 if tk < -325
xj inc -623 if h > 397
a dec 49 if un < 1341
ekl inc 491 if id >= -582
tk inc 171 if ey >= 3405
hpz inc -265 if ekl != 500
ehe dec -811 if lb <= 212
ehe inc 477 if hpz != 2702
oqg dec 137 if ekl <= 500
z dec -601 if ekl == 500
ehe dec -696 if y >= -510
ehe dec -616 if oui > 5038
p inc 584 if xj == 2120
abh inc -131 if z < 2734
a inc 62 if kq >= -1046
ekl dec -26 if oui >= 5030
abh dec -64 if lb == 203
xj dec 356 if tk < -320
un inc 270 if hpz <= 2702
l dec -632 if oqg != -4521
x dec 69 if tx != 1555
kq inc -685 if hpz == 2693
id inc -655 if p > 729
tx inc -763 if znl >= -2310
c inc 250 if y <= -508
kq inc 738 if l == -1784
tk dec -548 if znl < -2310
z dec -757 if ey >= 3403
ehe dec -969 if tk == 226
g inc 312 if lb <= 206
l inc 218 if hpz > 2685
h dec -500 if ey > 3400
a inc 612 if ekl > 522
oqg dec 134 if c == -1302
tk dec -622 if oqg < -4641
p inc -715 if ekl < 522
hpz dec -862 if abh <= -1166
kq dec 183 if a == 3069
a dec -934 if p >= 722
oui inc -474 if ey <= 3403
id dec 36 if ey != 3403
z dec 285 if x == -990
z dec 924 if g <= -1626
oqg inc -564 if xj <= 1755
kq dec -597 if ehe <= 2952
h inc 312 if y != -517
kq inc -911 if ekl <= 528
ehe dec 871 if l == -1566
a dec 35 if c == -1302
hpz dec 812 if g >= -1632
lb inc 674 if ey <= 3406
oui dec -729 if tk == 848
z inc 11 if xj != 1766
abh dec 35 if znl == -2314
y inc -62 if abh != -1211
g inc -480 if oqg == -4649
tx dec 224 if l <= -1563
tk dec -639 if un == 1602
ehe dec 825 if kq != -1904
tk dec -520 if c == -1302
un inc 560 if id >= -581
id dec -68 if c != -1296
kq dec -722 if ehe <= 1271
h inc 629 if l == -1558
znl inc 447 if ehe >= 1264
ehe inc -375 if x > -999
abh inc 135 if ekl <= 528
abh inc -532 if c != -1303
ey dec -898 if oqg != -4659
tx inc 149 if ekl > 523
z inc 140 if un != 2166
y inc -737 if znl != -1874
id inc -858 if lb >= 874
l inc -444 if oui != 5296
x inc -401 if xj <= 1772
un dec 422 if y != -1325
x inc -459 if hpz > 3545
x inc 671 if l == -2010
oui dec -26 if ekl > 534
z dec 813 if ekl <= 534
tx dec -172 if c == -1298
ey dec 544 if g == -2114
c inc -700 if c == -1302
l inc -951 if un != 1740
id dec 446 if ehe <= 881
tk dec -758 if z > 1615
x inc -854 if xj < 1770
a dec -739 if y != -1322
lb dec 564 if tx >= 1468
hpz inc 526 if id == -1359
ey dec -759 if kq > -1178
ey inc -765 if ey > 4513
ekl inc 354 if oui <= 5289
c inc -66 if tx >= 1472
h inc 9 if ekl != 888
ekl inc -247 if x > -2036
x inc 832 if xj != 1770
abh inc -867 if znl <= -1858
c inc 564 if l < -2005
xj dec 936 if lb <= 309
l inc 762 if x >= -1210
ey dec -862 if oqg == -4650
tx inc -136 if ey != 3760
oui inc -928 if x <= -1193
lb dec 325 if p == 728
a dec -157 if x != -1204
lb dec -832 if lb != 315
a inc -802 if h == 897
x inc -882 if id <= -1358
kq inc -98 if kq == -1174
oqg dec 64 if ey != 3751
hpz inc -582 if z > 1614
h dec 335 if ehe != 888
ey dec -137 if znl <= -1862
id dec 491 if a <= 4067
z inc -747 if z >= 1617
un inc -429 if un > 1735
tx inc 536 if un <= 1312
tk inc 360 if xj != 1764
tx inc 723 if l < -1242
ehe dec -74 if tx <= 2604
c inc 326 if a > 4072
lb dec -178 if z <= 874
a dec -218 if abh >= -2471
p inc 204 if z < 877
id dec 496 if id <= -1855
oqg inc 1 if x == -2083
abh inc 84 if un <= 1314
znl dec 396 if abh < -2380
x dec -94 if ekl >= 629
ekl inc 741 if un <= 1311
l inc -187 if y > -1321
un inc 576 if hpz <= 2976
p dec 334 if ehe > 956
hpz dec 2 if x > -1993
oqg dec -150 if g <= -2106
lb dec -290 if x > -1982
kq dec -16 if oqg >= -4502
ekl inc -135 if un >= 1882
id dec -491 if z <= 879
z dec 311 if h > 556
g inc -942 if tx <= 2606
oui dec 917 if lb != 1329
tk dec 650 if a == 4283
abh dec -623 if y > -1312
x dec 645 if c == -1504
un dec 335 if id <= -1861
ekl dec -160 if z < 570
tk inc 968 if ekl != 1406
g dec -298 if un >= 1545
kq inc -814 if id >= -1852
ehe inc -766 if y < -1314
h dec 540 if z != 555
x dec 683 if xj == 1771
x inc -258 if ehe == 199
l inc 452 if oui != 3451
hpz inc -294 if y != -1310
tk inc -785 if un <= 1552
a dec -752 if c < -1502
un inc 529 if ekl != 1403
xj inc -551 if l == -992
y inc 135 if znl > -2266
tk inc -439 if x == -2892
l dec 195 if x <= -2888
hpz dec 683 if l > -1182
z dec -486 if tk == 1859
a inc 858 if a > 5035
c inc 683 if abh < -2376
h inc -93 if oqg != -4498
id dec -46 if x != -2890
un inc 181 if a > 5037
abh inc -798 if y < -1184
id dec -912 if oui < 3449
a dec 526 if z <= 1037
ey inc 510 if id >= -909
l inc 930 if hpz != 1987
id inc -640 if ehe >= 196
xj inc -318 if lb == 1315
oui dec -797 if x <= -2889
hpz inc -563 if y == -1187
lb inc -77 if tk <= 1858
id dec 692 if un <= 2088
tk inc -45 if znl > -2266
abh inc 802 if hpz < 2002
abh dec 262 if h < 31
id dec 547 if tx != 2600
h inc -48 if p != 599
x dec -424 if ey == 4398
kq dec 584 if oui == 4240
lb dec -899 if kq > -1846
tk dec 417 if a != 5045
x dec 988 if oui != 4250
ehe inc 423 if hpz <= 2000
tk dec 497 if p == 599
a dec 201 if tk != 895
abh dec -140 if abh == -1844
id inc 455 if oqg == -4498
p inc 447 if xj == 1764
l inc -653 if p != 1046
a inc 226 if l != -245
a inc 491 if c < -827
x inc 942 if hpz < 2001
tx dec 52 if h <= 26
a dec 962 if kq < -1836
tk inc 980 if id > -1781
hpz inc 655 if un <= 2088
kq inc -389 if oui >= 4236
znl dec 334 if z >= 1040
c inc -985 if p < 1045
lb dec -597 if g == -2768
tk dec -356 if ekl != 1399
id dec -953 if g < -2755
oqg inc 400 if oui >= 4233
tk dec 14 if p <= 1050
ehe dec -657 if a > 4089
oqg inc -902 if x >= -2520
un inc -276 if tx != 2543
ey inc 734 if tk < 1875
znl inc -685 if ey > 5125
lb inc 959 if oui > 4242
xj inc 84 if ekl > 1393
xj dec 355 if oqg < -4995
a inc -711 if oqg > -5007
c dec 488 if p >= 1043
znl inc 222 if g >= -2752
z dec -169 if un < 1811
tx inc -379 if abh < -1696
znl inc 435 if un > 1803
oqg inc 342 if id >= -834
c inc -760 if ey <= 5127
id dec 750 if z > 1208
xj inc -994 if g != -2755
ehe inc 499 if y > -1188
oqg inc 643 if xj == 499
hpz dec 85 if y > -1186
abh inc -174 if un >= 1802
g dec 898 if ekl >= 1390
g inc -590 if a > 3384
znl inc 486 if id >= -1585
lb dec -650 if y != -1182
ehe dec -634 if id == -1577
tx inc -150 if un != 1805
hpz dec -610 if l > -250
l inc -648 if z <= 1216
y inc 607 if abh != -1881
ey inc 747 if oui > 4230
tk dec 125 if g > -4256
g inc 511 if a >= 3384
tx inc -751 if hpz != 3178
z inc -928 if ehe >= 2409
lb inc -278 if kq >= -2236
un inc -336 if c >= -1304
id dec -908 if znl <= -2354
y dec -183 if tk < 1733
tk dec -92 if h <= 24
kq dec -34 if hpz != 3174
x inc -991 if oui > 4247
l inc -644 if oqg < -4013
hpz dec -690 if y >= -568
ehe inc 171 if ekl <= 1399
a inc -253 if g == -3735
id inc 281 if tx > 1409
z inc 835 if tk <= 1841
znl inc -647 if y != -574
znl dec -991 if ehe == 2583
oqg dec -706 if ekl == 1399
p dec -870 if lb == 2596
un dec 293 if x <= -2513
z inc 418 if z >= 1117
tk dec -61 if tx < 1422
oui dec -569 if ey < 5871
znl inc -335 if g <= -3729
ehe dec 509 if hpz > 3175
oqg dec -24 if tk == 1894
id dec 73 if a != 3138
un dec 220 if y != -574
z inc 707 if ekl < 1405
p inc 238 if tk != 1893
p inc 667 if lb >= 2592
l dec -927 if ey == 5875
ehe inc -787 if z != 2248
znl inc 82 if znl == -1705
abh dec 839 if a <= 3142
ekl dec 22 if ekl > 1396
z dec 402 if y == -574
ey inc -732 if kq != -2229
x dec 869 if ey < 5888
lb dec 137 if y >= -582
a inc 204 if z == 1846
h inc 280 if hpz == 3181
ehe dec 876 if id != -459
l dec -156 if oui == 4248
oui dec 670 if hpz >= 3170
id dec -485 if z > 1842
z dec 40 if p > 1946
kq dec 671 if ey > 5872
a dec 745 if tx <= 1420
y dec 985 if tk == 1894
y inc 668 if l == -1540
g inc -231 if hpz == 3174
znl inc -481 if p > 1948
hpz inc -14 if kq < -2900
ekl dec 372 if oqg <= -3285
ehe dec -176 if abh == -2717
l inc 865 if p >= 1942
tx inc -587 if g <= -3962
a dec -679 if h <= 27
ey inc -261 if hpz != 3165
l dec -486 if tx > 829
ehe dec 913 if z > 1804
ey dec -431 if x == -3383
g dec 998 if y == -891
a inc -720 if hpz <= 3176
un dec 753 if hpz < 3174
l inc 740 if l < -182
oui inc -212 if oui <= 3578
oqg inc 363 if tx > 824
x dec 296 if p <= 1956
oqg dec 480 if oui == 3358
x inc -178 if abh <= -2724
x inc -579 if tx > 830
lb dec -188 if tx == 831
ekl dec 544 if un >= 1512
ekl inc 284 if c != -1304
id dec -418 if oui > 3365
a inc 12 if h < 19
lb dec 73 if ekl != 745
c inc 594 if id >= 24
g inc -118 if xj <= 506
id inc 274 if x >= -4263
x dec -248 if oui != 3350
ehe inc -431 if abh >= -2719
y inc -740 if y < -885
p inc -842 if znl <= -2095
g dec -101 if tx != 831
un inc -708 if id == 298
id inc 788 if id <= 302
ehe dec -4 if oqg <= -3399
h dec 904 if ekl >= 736
oui dec -828 if tx >= 823
z dec 309 if tk != 1894
ey inc 744 if tk > 1901
znl inc 133 if ehe <= 550
a inc -908 if z != 1810
tk inc -464 if h != -889
h inc 59 if ey > 6042
x inc -841 if l == 551
abh inc 293 if ey > 6047
tx inc 410 if un <= 813
z inc 218 if ehe >= 538
xj inc -875 if a >= 1635
kq inc -793 if abh < -2415
oqg dec 361 if h == -823
tx inc -847 if xj >= -378
hpz dec 725 if a <= 1641
lb dec -740 if h < -830
hpz dec 259 if h < -818
id inc 353 if kq != -3687
oui inc 540 if p == 1109
lb dec -235 if tx > 392
hpz dec -601 if h > -826
oqg dec 287 if oqg == -3763
oqg dec -965 if abh < -2433
id inc 172 if oui > 4722
z dec -226 if ey <= 6054
kq dec -173 if x >= -4859
y inc -123 if un > 798
lb inc 522 if kq < -3514
abh dec 543 if znl != -1973
id inc -418 if hpz == 3516
tk dec -115 if abh <= -2966
x dec 501 if ehe > 533
oui dec -460 if kq > -3524
l dec -712 if g == -5084
c inc -239 if tx < 398
abh dec 956 if oqg < -4041
x dec 357 if id != 1201
un dec 45 if tx == 394
z inc -123 if ekl != 748
g inc 479 if p > 1099
a inc 942 if id >= 1186
id inc -788 if oqg >= -4057
tk dec -821 if y > -1762
g dec -672 if tk < 2371
ey inc 647 if oui > 5179
x inc -382 if lb == 3402
id inc 742 if lb >= 3394
hpz inc 631 if x >= -6097
h dec -368 if p > 1101
ekl inc 44 if ehe == 543
p dec -420 if l > 549
y inc -539 if tk < 2365
abh dec -516 if tx < 395
ey dec -752 if hpz != 4147
z inc 970 if tk == 2362
y inc 698 if g < -3933
ey inc -131 if l != 541
tx inc -663 if c < -954
z inc -161 if l >= 544
kq inc -616 if g >= -3931
tk inc -915 if oui <= 5188
ey dec 978 if id == 1141
y dec -430 if ehe <= 541
kq dec -129 if tk <= 1448
y dec -319 if x == -6091
znl inc -192 if x < -6086
oqg dec 560 if ey <= 6565
ehe dec 531 if ey == 6565
abh dec -732 if xj < -372
xj inc 421 if kq < -4135
x inc 85 if un >= 755
c dec -26 if oqg != -4602
oqg dec 943 if a != 2576
ey dec -370 if oqg == -5560
oqg dec 620 if ey <= 6561
tx dec -308 if oqg == -5553
znl inc 123 if ehe <= 19
ehe inc 848 if a >= 2577
tk dec 679 if z < 1970
c inc -339 if z > 1963
id inc 349 if lb <= 3407
x inc -88 if oui > 5177
hpz dec 617 if oui <= 5185
oqg dec 696 if z > 1964
oqg dec -984 if z != 1966
lb dec -904 if un > 767
oqg inc -480 if p > 1534
c inc 496 if un < 769
g dec -564 if oqg > -6256
ehe inc -874 if abh > -2674
l inc -20 if l == 551
lb inc 962 if ey != 6575
hpz dec 99 if ekl <= 792
l dec 941 if y != -1443
ey dec 621 if g <= -3361
xj dec -474 if oui >= 5183
xj inc 807 if g != -3364
abh inc -75 if a < 2593
kq dec 57 if c <= -770
hpz dec 274 if p != 1529
oqg inc -927 if ey == 5944
c dec 171 if g > -3372
p inc 54 if xj == 1326
ehe dec 249 if oui >= 5184
ehe dec 315 if un < 765
lb dec 545 if y < -1429
znl dec 998 if hpz > 4049
z inc -122 if hpz <= 4057
znl inc 620 if kq > -4197
oqg inc -349 if un == 759
tk dec -186 if h == -455
oui inc 717 if ekl <= 798
xj dec 701 if h >= -456
un inc -50 if tx < 709
lb dec -784 if h < -452
tx inc 175 if tx < 710
tk dec -575 if ey != 5944
oui dec 856 if lb < 4604
ehe dec 179 if abh > -2746
hpz dec 537 if xj < 622
ey inc -862 if y <= -1427
oqg inc 104 if abh <= -2744
kq dec 453 if p == 1583
ekl dec -587 if tk == 958
tk dec 309 if tx == 877
oui dec -628 if y < -1425
kq dec 509 if x >= -6096
xj dec 953 if oqg != -7412
lb dec -435 if lb != 4595
c dec 341 if id == 1496
x inc 796 if x < -6093
hpz inc 401 if g > -3365
znl inc -36 if x > -5303
h inc 282 if oqg != -7419
ekl dec 802 if z >= 1838
c inc 586 if ehe != 305
p dec -293 if g < -3371
ey inc 125 if kq > -5158
ekl inc -108 if abh != -2753
ekl inc -848 if xj != -324
oui dec 801 if ey > 5211
x inc 704 if abh == -2750
z inc -759 if ehe == 296
g inc -964 if ehe < 301
ehe inc 307 if xj > -330
c inc -272 if ehe == 603
ey dec -497 if un != 700
lb dec 533 if c >= -978
y inc 864 if z == 1085
ekl inc -895 if x < -4590
abh inc -424 if xj != -324
lb dec -756 if l == -418
xj inc 23 if g == -4328
znl inc 716 if g >= -4322
h dec -669 if l <= -409
oui dec -305 if lb >= 4498
un dec 664 if id <= 1493
hpz dec 706 if g == -4331
ey inc 920 if lb <= 4512
l inc 858 if c < -968
tx dec -357 if ey >= 6631
oui inc 344 if znl != -1466
tx dec 549 if znl > -1466
tx dec 748 if h > 491
znl dec 544 if xj >= -332
oqg inc -626 if y > -576
kq inc -28 if a == 2585
ekl inc -895 if tx == -420
oqg inc 770 if ekl < -2173
g inc 712 if kq == -5155
ey dec 809 if a > 2578
znl dec -8 if c >= -972
oui dec 360 if p >= 1580
l dec 231 if znl != -1992
hpz dec 307 if l > 443
oqg dec -152 if x <= -4594
y dec -153 if id >= 1488
oui inc -122 if l < 456
xj inc -818 if id != 1493
un inc -819 if a != 2594
abh dec 518 if ekl < -2169
znl inc 873 if y < -412
ekl dec -431 if h == 496
x dec 498 if x > -4595
ehe inc 133 if z > 1093
tx dec 293 if g != -3619
kq dec -29 if znl <= -1118
tx dec 621 if un > -120
p dec 494 if z >= 1089
h dec -40 if l < 457
z dec -430 if lb == 4501
tk dec -339 if kq == -5126
y inc 616 if oui != 5834
kq inc -28 if z == 1091
abh inc 267 if ey < 5808
hpz dec -100 if h <= 536
p dec 883 if kq < -5120
tx inc 516 if p >= 699
l inc 183 if oui != 5846
kq dec 230 if znl >= -1120
znl dec 595 if ekl > -1742
oqg dec -408 if g <= -3614
y dec -796 if c >= -977
id dec 414 if lb != 4514
ekl inc 845 if abh <= -3685
c inc 193 if p <= 699
xj dec -590 if oui == 5842
z dec 899 if kq <= -5349
kq dec 616 if kq <= -5365
g dec 371 if ey == 5815
lb inc -922 if y <= 1003
hpz dec 592 if a != 2576
xj dec -548 if ehe == 603
lb inc 867 if oqg < -7495
x inc -162 if l >= 628
ekl dec 926 if un <= -116
ey inc -661 if oui != 5851
z inc -44 if a != 2588
kq inc 929 if h >= 529
p dec 373 if oqg != -7496
oqg inc 629 if g >= -3996
kq inc -667 if a <= 2579
p inc 620 if ekl <= -891
xj inc -169 if x >= -5249
tk inc -327 if g > -3996
h inc 96 if oqg > -6860
c inc 362 if c != -963
tk dec -861 if un == -110
ekl dec -765 if x != -5259
a dec 844 if g != -3980
oui dec -549 if l == 631
c dec 753 if p > 937
a inc 661 if y <= 1001
a dec -315 if oqg < -6853
znl inc -538 if p == 947
un inc -894 if tx < -515
abh inc 958 if a > 2711
xj inc 806 if tk < 1527
abh inc -317 if z >= 136
tk inc 75 if un <= -997
x inc -171 if a <= 2718
z inc -339 if ekl >= -139
oqg dec 743 if un == -1004
znl inc 942 if abh != -3058
y inc 195 if un != -1014
oqg inc -289 if z > -192
un dec 253 if un >= -1006
ey dec 426 if hpz < 2542
ehe dec -877 if c >= -1364
z dec -399 if ey >= 5147
znl inc 224 if un > -1267
h dec -1 if x != -5427
oui inc -541 if abh != -3047
h dec -48 if id <= 1085
oui inc -841 if y >= 1191
ekl inc 880 if xj < 805
xj dec 804 if z <= 210
xj dec 91 if h >= 690
ey dec -355 if oqg == -7601
tx inc -508 if znl > -1089
xj dec 948 if ekl != 754
p inc 675 if z > 201
c inc -872 if p < 1624
un inc -470 if znl <= -1081
oui inc -672 if z >= 202
c dec -191 if l > 628
p dec -603 if y <= 1196
un dec 283 if id != 1086
un inc -942 if znl != -1096
tk inc 553 if tk < 1604
l inc -644 if ey < 5515
y inc 845 if g != -3985
oui dec -883 if un != -2947
ehe dec 449 if p <= 2226
kq inc -410 if oui > 6052
hpz dec 97 if ey > 5509
znl inc -892 if hpz != 2539
oqg dec 585 if znl != -1971
z inc 257 if tk == 2150
a dec 445 if oui >= 6053
oqg dec -745 if oui == 6061
ekl inc 631 if oui <= 6064
un dec 401 if znl == -1978
oqg dec 289 if kq < -4835
oqg dec -867 if xj != -954
h inc -764 if ehe == 1031
y inc 63 if z < 468
id inc 750 if tx != -1037
z dec -142 if a != 2269
x dec -497 if x >= -5423
ekl inc 27 if x > -5427
ehe inc 458 if kq <= -4829
oqg inc -20 if un > -3355
l inc -512 if znl != -1982
ehe inc 684 if znl != -1977
ekl dec 834 if x <= -5427
p inc 563 if l == -525
znl inc 178 if ehe > 2173
y dec 396 if ehe < 2181
p dec -55 if ey == 5515
id dec 670 if znl >= -1981
z inc -718 if lb >= 3581
c dec 976 if tk < 2152
g inc -118 if ehe != 2179
xj dec -150 if x == -5425
ekl dec -332 if xj != -806
id dec -692 if ekl == 1739
DAY08;
    public const Day07 = <<<INPUT
jlbcwrl (93)
fzqsahw (256) -> lybovx, pdmhva
rxivjo (206) -> mewof, hrncqs, qgfstpq
jhldwxy (26)
bpzxjg (62)
lahain (70)
enbnfw (39)
uzsytm (45)
gmcsy (16)
rsqyvy (99)
lsbsfge (163) -> ldxgz, mksan
husmkc (29)
ootidjt (63)
pjhry (38)
kvlbq (22)
rdrad (6) -> gwyfm, fozyip, uotzz, fmkkz
oqbfkud (470) -> rnbqhk, mepez, mnksdxf, mjsck, bbfaxid, nglea
pgchejz (54) -> ifelr, rdkvtq
zzjyw (91)
yftjdo (12)
eqnvty (87)
adbolgz (38)
rcjqzp (65) -> mkyam, apdfe, avzljw, hxgidsw, fkgxak, wzsbsf, woczl
ksrsmjx (72)
wfdlusw (49)
rpoep (38)
jesiypo (78)
jjxvns (56)
syyfs (35)
otplae (91)
epsjj (17)
utgxfsh (959) -> mupbrv, borbd, jmieet
pxzdv (15)
ksybvgt (213)
tywzhc (243)
sbdja (16)
ctynr (63)
vwbjuvx (99)
aidknm (97)
qlgme (21) -> ehjnzn, cdbkci
zetvslt (99)
ferzy (65)
dssdiok (97)
gexdb (6)
bbzmsv (87)
mepez (126) -> uqvyau, witovp
pubtsp (70) -> jlvwibm, uvvdw, okmqiy
gjcxbx (44)
mogwb (84)
qwiekvk (65)
kwbovke (74)
offjbb (15) -> dvoja, jteju, wuybunc, qzpzi
cwdmlj (86)
ojpok (88)
lytcy (2662) -> bkmvwp, uyrwi
antcinm (178) -> dmthn, ycacj, wkhggv
kstvq (69)
ibysnvc (79)
xulwh (71)
zgqzrc (459) -> wlajxb, mfywm, jqmlxr
uyrwi (11)
qirjqsm (96)
fnoteku (2482) -> mbezs, kcuygjx, bymkeq, opsqjx
leeyi (88)
pcodkpi (95)
tetdx (224) -> nshbwn, rpoep, fbqpk
ajhctd (18)
yhzuh (72)
dmvjz (39)
zdgwmi (24)
vprkzya (37)
ipryqov (24)
pdxylvu (86) -> etscle, bqtawf
ehrqn (23) -> njabgq, fyzeso, jrgwnfh, fxasat
ekszr (148) -> gnmydtk, wchxl
izkaqg (26)
lovypfn (53)
sztqzfl (98)
ckwopo (43) -> yurfpj, bgrxlxe, tohrp
muksdck (48) -> gwtcgyo, tfpuqgs
tlfsn (21)
hrvztx (57)
psulm (1838) -> rhbouej, urhlfju, obfet
dbufjl (95) -> faihy, oyamw
ucfhxsv (65)
ietfhkq (31)
psvjtka (29)
wzxei (51)
swurfm (64)
oybwhs (18)
dmdiy (1601) -> lazjlns, ygvol, rljjjo, whnjtp, jilomb
jteju (54)
rdnpoms (177) -> eskdbe, fbhidp, xtkxwd
rdhwx (62)
hxgidsw (332) -> fukgfu, skkatyg
pcewixh (109) -> iekurr, xspxxb
gsiypfp (1146) -> bhwca, qhcolun
igpabio (53) -> mlqxueo, lhsncv
vdjmhb (39)
pwdpe (42) -> leeyi, rhlpt, dtexqt, skpcerk
ciejakr (43) -> hcqnhm, anmeg, melsryt
yehxck (2391) -> boygd, kayqqz, iajslqp
sofve (139)
asifeu (278) -> rtsajcq, dcouu
mgqfa (75) -> cipgxee, jscjw
kbppnh (99)
apwsmv (31)
dzjyzd (39)
uobgj (488) -> akidv, sofve, wblhx
qngfv (8)
kledju (95)
besihsl (86)
zqnmsyb (73)
csqfv (14)
ubgrma (1059) -> ymhxg, yvxuom, aeyykn
ufyqf (77)
llventw (308) -> lsbsfge, itxycu, nddymc
zfhwfsw (53)
kigdvl (31)
fiufzkb (1194) -> ysigfem, bchfd, hgsmlsi
vaubjz (233) -> erfnrn, gqzva, goxfpk
yhpiqn (99)
wzsbsf (222) -> mwztduj, hkpvwpa
mjaol (281) -> dnazkh, jkamtqv
mufnw (106) -> yxdld, obkhwze, nkssh
mhapqqy (16)
brztp (27)
ebmjz (68) -> xfydt, eqnvty
hkjwio (322) -> hdzxuz, zdgwmi, ipryqov
eszxg (18)
qwzac (908) -> uiioczf, qjdpk, ylpuaf
ndsub (75)
xcqwjrm (63)
glsrg (74) -> maiimn, ufyqf
mtcxdod (80)
ygmhxm (129) -> pljyyn, njdmj
ijcojo (1042) -> dxboqki, ikplh, pubtsp, omergh
urhlfju (249) -> csqfv, rnddnj
lgefkp (17)
bmmmp (90)
rjzrh (360) -> hbkujf, mzwbtsa, oywob, dmxhbe
khiom (117) -> hpaggeh, lqumiws
zlgpmfs (143) -> ilxfa, nhpcp
fozyip (293) -> kvlbq, pfqbht
ylpuaf (64) -> mdzkkjf, tfdbdq, kiauwpn
xekimqs (65)
bekxoxk (87)
zybeuh (197) -> wonxzkm, jzuvrtp
pudyrbw (76)
bcyarwn (65)
saowgr (367) -> gbnxgny, krmphks, yftjdo, zmpwz
tgmle (73) -> prcjhey, thzwwh, cxhipq, tgvpi
ezxsv (90) -> qzqyveb, dfmlo
rayez (17)
ujjpxe (56)
efsrz (93)
xaifomj (53)
ayury (23)
zavef (69)
qonfiro (190) -> cotvk, evqkdq
puurcu (1689) -> awagc, ajhctd
omergh (208)
padxpdx (192) -> psvjtka, husmkc
cxhipq (92)
jhgsgy (39)
leyiz (74) -> fvfek, njrfnvt
kdcvwyf (52)
zyympz (887) -> pxteg, amnoi, amzwex
jbbmcxg (34)
uvmqarq (751) -> muyodod, nclwgga, oeqvt
duepwu (683) -> hbueku, zbcra, yxtjx
aatagmv (44)
zsvuw (11)
fynniwm (35)
fjzpjk (88) -> uvsny, aatagmv
rulhhsl (90)
fcscdg (276) -> twvib, skjtvyz, oybwhs, rdmggka
vwotlbl (61)
ijyoy (24)
jpenh (186) -> kdcvwyf, rjxvbkb
qzpzi (54)
nshbwn (38)
foyfb (50)
kbyot (337) -> jhldwxy, izkaqg
bhxdhmr (65)
netsm (53)
tgffx (75) -> kstvq, cjmfqbo
msthql (7)
hgscccv (62)
dbnelj (212) -> jzcmf, sqiac, ijyoy, jjqguew
jxfqev (99)
elmog (32)
ygvol (202) -> mszzq, tzzdbi
gjrqs (159) -> iprkb, cgouh
rabxkov (84)
wenii (79) -> qsrpqe, zdhqhh, jpenh, hwrxn, vtvnn, mpgixa, fbjbwv
jkqvg (28)
kzdugfh (90)
mhkcp (17)
tfhdccw (93)
qzakfh (62)
hrncqs (12)
tzmndkd (221) -> lixsvp, ofyxhb
cjmfqbo (69)
ikplh (98) -> bqifoq, pjedtl
berje (87)
ikbqz (9)
avzljw (234) -> vdbihjp, zavef
ibiwh (26) -> ndsub, moihbcu
vdvadz (38)
yirnxk (158) -> lgefkp, rayez
vbnlfuo (169) -> pppxrv, rdhwx
lgxjr (238) -> mhkba, bsrkr
ynayo (71)
uvvdw (46)
udkyxw (48)
zotwsb (170) -> wlufwnr, frksv
tohdgsa (30)
bqtawf (45)
wrfxdc (25)
vjxmbzm (69)
opmmmd (32) -> pcodkpi, xhonf
hkpvwpa (75)
uflldd (39)
oelrlp (23)
lptkbzc (151) -> unvje, bzsiwp
ecdieu (23)
pxhwecw (57)
ryulu (61)
uplweb (127) -> bpzxjg, utivde
wblhx (97) -> xayglgm, pddllsa
grcox (91)
xergqq (99)
tgujvov (59) -> rhpco, ojpok, trbnpf
sdnkg (1381) -> gyutarg, gcwcs, mfjeyx
oydxsh (67)
pxihdrd (50)
cizehi (7)
zhopeqm (80)
frksv (89)
qvbfob (266) -> oejqkp, ocgkcxp
ldfsxw (17)
wltpv (260) -> nlndxah, etyyw
pddteg (52) -> lwwyx, mhnlgyl, mvfhc, dzggd, opqoq, mufrkl, inghbu
kybsigz (80)
hgsmlsi (31) -> bqqwmry, lqavsk
cbyvzkp (99)
tjpatnk (44)
srneoo (11) -> dhlrq, ivwcuc, laxoeu
piouhkc (95)
tgfgem (33)
egrfvic (49)
jmieet (137) -> ckwooig, stkodp
cldbz (15)
gylsj (52)
ecoqyk (35)
pnhibed (75) -> gmdsb, gijtd
fksxl (5)
rhpco (88)
eklahxm (51)
ftzht (8102) -> dmdiy, sfrbkzf, hlcnxe, zwsrt
cykvxs (84)
ccckie (201) -> tgkusb, alztgi
hbueku (10) -> ohcszyk, szutvca
cztikzk (174) -> wxdpcvv, lpbayb
lprmau (27) -> rqymw, dssdiok, dydwqz, eyale
zorvynv (176) -> mqybmn, jaxidl
laxoeu (88)
nvvxl (93)
duophdw (72)
qjwfsfk (11)
tzzdbi (8)
kwmam (184) -> wdybaj, cyielpd, hhifd, gexdb
ujktzrv (71)
dvoja (54)
opsqjx (71)
hlrjgro (63)
oqjkafl (32) -> iwyjkz, auneqme, awccm
vuyeiv (65)
qhmyi (130) -> dvfuz, scruak
tnayomw (62)
ezdhr (179)
ypfsjd (60) -> rdmrzdv, yhpiqn, cbyvzkp
auneqme (86)
kabixkr (73)
jntohm (41)
oyamw (65)
utivde (62)
qhcolun (76)
qjcbye (535) -> fetkt, pcewixh, vaubjz, ojhlp, mnvgaqh, rcjiwg
rfdpm (80) -> wcevmtt, tlayc
ovvrx (84)
zdhqhh (200) -> ylyef, onogiv, tohdgsa
ofidu (349) -> pjxqt, cytlm
zqmlv (59)
uzuawb (47)
unvje (71)
osbbt (1214) -> gqmscj, vyriv, bkkop
tmyhhql (51)
zxson (61)
rhlllw (11)
xtkxwd (17)
lijeejc (57) -> mgkkyx, thzyz
crhho (1255) -> rfcfgg, chnfm, tuekps
jqkaucw (53)
rerckg (63)
kgevjdx (84)
muyodod (19) -> wolet, zzjyw
zjzoo (65)
evqkdq (91)
mecyei (75)
bvfcsls (227) -> knpwsi, ypfsjd, eilzvpr
ntabiof (365) -> rfohgya, yoqbgjb
gqmscj (155) -> kjlmdi, scaec
bkmvwp (11)
tuekps (169)
mksan (18)
apmdcz (16)
plumb (89)
gcmio (126) -> ujjpxe, jjxvns
uqvyau (6)
bdkoa (125) -> ctynr, tvnco
xseshzl (76)
mnpvutr (39)
lghzki (27)
citugfl (14)
vxgwku (16)
jwaskb (251)
olkopyn (66) -> qjcbye, cstgeia, uojcup, ycctk, dkhuccj
jscjw (72)
xatyg (71)
xpfxwd (8)
jjjks (7331) -> qpefm, dlhiqh, gtervu, pcnroj, jijwa, bgbnlki
ewvvi (53)
ycbgx (1531) -> tzmndkd, fpynzz, tywzhc
cstgeia (613) -> ckwopo, sjiel, akwfu, ehvqyl, wtyfb, gcmio
ursjc (45)
mabkbom (57)
lafoho (250)
xmvbzka (49)
oasspz (67)
epumc (86) -> pcdjo, rerckg, dwknfpc
cyielpd (6)
lmqaxz (146) -> ghobhlm, qvvcx
ydqjoa (84)
zfkfhfn (33) -> txapm, pygfz, ekszr, nbivp, wltpv, jsjaxjk
sslltlv (45)
tifqyde (2264) -> koxiwk, psulm, rcjqzp
vonzkut (76) -> bdafpm, nvlxqp, gxsbt
blagy (338)
cluxnul (15)
kdevmnr (77)
cmxulaj (44) -> mnkqevh, mkbgt, nrcbc
tygwtg (25)
wpnqifq (11)
jilomb (68) -> uduan, mecyei
kytnz (52)
gynfwly (66) -> lynvd, dxhcxko, xaatl, leulsg, zworz, fkbrmim, jjjks
msfxkn (130) -> ietfhkq, kigdvl
wewzb (164) -> yzptgez, ctytfj
hdzxuz (24)
ghbfyqe (5)
hbkujf (133) -> ukghke, aplbnbx
iwsjla (38)
dnalt (35)
gmdsb (75)
pcnroj (2553) -> oljci, losdis, sdnkg, zchulv, crhho
dzrkq (94)
cjcapa (292)
dzohgiq (43)
rhlpt (88)
dkvzre (99) -> mieecfc, nvdouwn, dbnelj, onlwq, ayaouxu, xrhsy, bvrlaep
zpntow (72)
vohta (58)
jqmlxr (173) -> eiyxf, fydjnl
lxhkgs (85)
qoiuwmf (1008) -> vbnlfuo, wjyreb, sdbksb, lptkbzc, wopfs, khiom
btgrhku (24)
nnhsuja (16)
jgwvp (84)
vdpmvm (28)
iimfrx (59)
oyfma (21)
sqypc (7)
txapm (272) -> isggu, yookz
zhbiaq (45) -> rqzfef, kplegas, ayejq, xevhcxq
bkcghv (35)
yjakrqa (70)
lmwrf (51)
uwhjd (94)
bpphw (49)
vtvnn (114) -> uadnb, huunb
blmfs (52)
rtsajcq (6)
lazjlns (190) -> xbyjur, edjwkkk
rnddnj (14)
vobeup (41)
kifer (53)
jdzbqlz (15)
wlufwnr (89)
bqznix (75) -> stiln, duophdw, yhzuh
aovlz (45)
dyrvvfn (340) -> prxseo, vxgwku
ukghke (28)
lnczb (69) -> tzntd, cfnce
qllluo (57)
asbzj (89) -> yjxyb, hsifo, fhasacf, vwojb, gcbcyn
sruyra (47)
ohplzu (58)
fmkkz (319) -> owigu, ikbqz
zimrsr (223) -> dxympe, fhpaqmd, ayury
cdbkci (79)
tchbf (93)
wdybaj (6)
bexvn (39)
rcsfkrb (11)
bgbnlki (2277) -> oqbfkud, qsqis, xhyqtqz, qorkez, qwzac, oewlch, gsiypfp
zworz (41633) -> ootkqm, wfovakv, inldh
dwknfpc (63)
xjcprt (87)
ghobhlm (41)
erfndpf (89) -> kwbovke, adxhax, cipwzoy
setrric (31)
erggh (197) -> fksxl, ghbfyqe
pzksun (873) -> vyozfv, jxfqev, kbppnh
pddllsa (21)
xeomb (44) -> vuyeiv, bwrpskq, qwiekvk, gxzkde
dfmlo (80)
guvuihw (39)
khqhd (42)
fphgbca (59)
fhasacf (269) -> fovilf, rjnzany
oyamsv (38)
kjjyu (65)
pfqbht (22)
amzwex (218) -> vprkzya, wxixtqj, oktfn
lwljcg (85)
hpeaki (35)
rcjiwg (35) -> odckjtb, jlfgvr, tdbne
ktazkb (57)
tgvpi (92)
sdhqlxw (1239) -> eklahxm, ejzeqxz, kabcmf
aonfaf (52)
mlqxueo (67)
akidv (21) -> cnvyxm, fphgbca
bozlg (67)
ewpbnsk (64)
thzwwh (92)
tuieolg (7624) -> ldnrw, cfuqhip, rjzrh
tzrppo (51) -> tfhdccw, kbses, jlbcwrl, efsrz
fbjbwv (290)
dmthn (25)
witovp (6)
ugjzag (24)
agliie (844) -> qjaywg, rridl, myaiu, antcinm, izhdt
ebgdslc (31)
abmqz (31)
hsfjd (21)
ootkqm (9535) -> uplweb, bdkoa, ehrqn, fpqudx, assuj, rjguqr, jwaskb
ldxgz (18)
atfhgyu (57)
hbzju (71)
rrywqx (69)
dxqqhhd (188) -> pzewv, oelrlp
ixtrjm (92)
njeff (28)
dxboqki (78) -> nstdz, ferzy
mnwefbn (65)
bugfhhx (357) -> abbnh, intfltq
qorkez (1280) -> euqiok, ibvaekj
anbcmt (17)
iprkb (26)
vflyupn (34)
ruwzkz (362)
xrxseqy (94)
mszzq (8)
thzyz (77)
xyxtm (92)
qeubhb (65)
fmtyy (35)
hpowmso (1854) -> jhysc, xeomb, nzwxd
ywvmghy (63)
rridl (131) -> nqvflzq, vwotlbl
dydwqz (97)
mhnlgyl (1185) -> qntstgd, qzpgle, aozygag
uycjl (292) -> xcqvne, ruxnrix
ohcszyk (32)
gtervu (88) -> dkvzre, awufxne, osbbt, ycbgx, wdjzjlk
xcqvne (35)
moihbcu (75)
wpoga (57)
rjxvbkb (52)
bihsr (21) -> kyjkjy, hgscccv, yonjpz
vmmjgy (742) -> vdkxk, yhyxv, cpfbmv
gwnipjd (24)
brcpgz (57)
dczcz (1862) -> wszghwt, navhthp, lsfggz
wmaywuo (87)
vrfkofp (49)
nrcbij (64) -> pudyrbw, ghdime, xseshzl
yxtjx (74)
dnzdqz (179)
gxsbt (58)
oqrmida (222) -> lixqwd, dnalt
nddymc (93) -> ewvvi, netsm
iekurr (71)
tcghqr (43) -> mnhojtk, ruwzkz, veksns, wrochvi, uycjl, umtfn, qgvsuqv
ikfihh (140) -> tygwtg, vlmhyer
ziypsz (84)
ehjnzn (79)
exwxepj (175) -> jszpe, guvuihw, ykruy
capxp (68)
nhpcp (34)
qzpgle (77) -> gwnipjd, mrcoxnt
edjwkkk (14)
uteosk (65)
ofyxhb (11)
tulxgem (213) -> mabkbom, btcjg, ktazkb, evcdf
dkttrfw (219) -> ahqfoz, kytnz
mttvnpg (9)
tzntd (59)
euqiok (9)
wgypwo (290) -> btgrhku, aqkdlo
chnfm (169)
vlmhyer (25)
urjwj (78)
miijab (49)
faihy (65)
skkatyg (20)
zfnoo (18)
dcmxxd (35)
evnlr (1175) -> erfndpf, hicuenj, zybeuh
qzqyveb (80)
wpdbejb (90)
trbnpf (88)
yxxpgv (70)
wyomko (184) -> tgfgem, clnkvox
dxhcxko (45) -> ftzht, ypsme, rmtbjn, pjyld
lixsvp (11)
mofkvq (126) -> ejuiv, abmqz, xqobg
zqtkn (79) -> ugjzag, dtzyg
xhonf (95)
kiauwpn (22)
nmstp (44)
hsifo (210) -> wfdlusw, myonh, qunldzi
whnjtp (146) -> zswyy, bmugsve
txkgx (60)
icjur (76) -> lwaeqm, rhdudt
fpynzz (24) -> kepkgvf, kabixkr, jbexk
qunldzi (49)
ucxedq (84)
wndpfac (55)
hicuenj (122) -> ootidjt, hlrjgro, ywvmghy
kkdaw (65)
dmxhbe (141) -> myhrxc, jbbivz, behncf
borbd (21) -> ujktzrv, hbzju, xulwh, xatyg
adxhax (74)
zwsrt (2544) -> xmvbzka, egrfvic, fovkc
hhqlfj (81) -> xqgwwr, zmlmsuf
jiuuhl (78)
dcouu (6)
yetcvhx (71)
rfcfgg (28) -> sruyra, bqmqbi, uzuawb
pygfz (92) -> kledju, upevl
etscle (45)
pzjbbdd (93)
fjpgybt (21)
mjsck (90) -> mkkpihe, fmqjogk
cfuqhip (57) -> ixkicz, yqnihs, vifwkwa
jkamtqv (80)
ulvncs (172) -> bexvn, jzsmy
cytlm (46)
axikbt (9) -> tjffhqh, mogwb, cykvxs, ydqjoa
lageym (228)
jmlznjh (50)
wszghwt (160) -> brcpgz, wryfov
yxdld (38)
fukgfu (20)
mjlnaz (72) -> zcgfj, jiuuhl
bchfd (109) -> ccityq, nmvvgr
ogvod (1281) -> bihsr, erggh, dqgfb, xguhm
gcxrx (91)
ttnnyy (92) -> lhsccbq, dpdjpal
kxflpnl (16)
ehvqyl (192) -> zjgok, ecdieu
lsfggz (94) -> itttb, wpdbejb
aacegb (8)
wxdpcvv (8)
viufoq (25) -> bekxoxk, wmaywuo
pqnte (70)
rmtbjn (78) -> lytcy, aiunuvn, hfvhp, dczcz, kqaoir, ekihql, qkrydu
imjutr (187) -> wgeig, wqbhby
swpfak (21)
vmvxwar (38)
uxrrjqx (205)
mddejh (441)
fbhidp (17)
vunam (90)
rnbqhk (62) -> rdwkvr, oyamsv
bezvr (55)
kbses (93)
dqgfb (43) -> hpuyku, rycmr
uadnb (88)
dnrfjv (55)
wykkwa (67)
kyjkjy (62)
wrochvi (150) -> kifer, xaifomj, usodrg, jqkaucw
krmphks (12)
jbzaips (36)
qjaywg (94) -> khpat, jcpavmj, bchlcqs
kayqqz (77) -> kdqjj, sbdja, gmcsy
zjgok (23)
mrcoxnt (24)
wopfs (159) -> oasspz, zgssy
herqgqi (36)
zcdzv (11)
assuj (137) -> atfhgyu, pxhwecw
cvgbj (48)
lywkfsn (127)
cpfbmv (204)
scruak (30)
lsteeu (162) -> tatubv, rprjk, tgblta, uxrrjqx, pweea, sgieno
hhlxxzt (96) -> ixtrjm, tknmww, cnbekc
gmwtl (49)
sjiel (238)
pweea (51) -> eggmj, clpekkm
cnnrj (78)
eilzvpr (213) -> ksrsmjx, zpntow
cipwzoy (74)
apdfe (184) -> xrxseqy, leegl
bkkop (347)
cuhrgp (81) -> ohtply, vrfkofp
kepkgvf (73)
odkzxae (91)
qmqrpcl (92)
bgrxlxe (65)
xqobg (31)
awccm (86)
slhitu (27)
dihzy (79)
jfdscql (362) -> amrbhgv, rfdpm, ecxfenj, dxqqhhd
eqsxuaq (49)
hlcnxe (1998) -> fcpde, zyniqni, offjbb
pdmhva (18)
dtzyg (24)
xpker (36)
gqzva (6)
thqkxpl (38)
avelbqj (31)
mrigsjh (55)
ltbpi (17) -> vwcygm, herqgqi
odckjtb (72)
tdniuai (39)
tohrp (65)
wryfov (57)
vhrtptr (139) -> bpqhqbg, pacsxn
ohrraic (94)
eyale (97)
beraw (14)
mfywm (79) -> erkarx, vscjrx
knpwsi (261) -> cvgbj, uzjejte
wjyreb (41) -> rabxkov, rxqfv, gcomv
rdwkvr (38)
mmerpi (5)
cbgyk (43)
oxyof (44)
tjhmz (51)
zmqom (42) -> grazu, yxkldyi
rxanas (210) -> ctfjb, ifbxvs
lynvd (42593) -> tuieolg, pddteg, pixmx
scaec (96)
zbcra (38) -> rjeunph, edkigpl
ciogjt (375) -> tygnc, vhrtptr, ccckie
uvsny (44)
mpgixa (110) -> bmmmp, btxepbv
aqkdlo (24)
yjxyb (77) -> tceog, pqnte, yxxpgv, aokpx
tlayc (77)
kjlmdi (96)
rqhhyc (214) -> cizehi, sqypc
tgkusb (32)
xguhm (102) -> syyfs, hpeaki, fynniwm
koane (8) -> rawuoi, hkjwio, vpynuf, exxcrj, ljhtov, pwdpe, bdymucv
phmtqf (175) -> aodnlv, jancm
rjguqr (183) -> fgdqr, ccsrkny
mnhojtk (218) -> kvdrnf, nkjgwn
ejuiv (31)
rijipom (107) -> ijmfnt, ymduw, vdpmvm, njeff
bbfaxid (138)
yoqbgjb (25)
bymzb (68) -> zneumoh, zhopeqm
qntstgd (103) -> bbkfiz, zonni
ahqfoz (52)
gfqtz (98)
yvxuom (154) -> jbbmcxg, ppiiyuy
zxkvs (12) -> bclicjl, yfruc, axikbt, nglji
vwojb (97) -> qeubhb, kkdaw, ucfhxsv, rythrvz
akpnwc (90)
rawuoi (166) -> dzouqwl, vztyfp, dqgivj, cssov
eggmj (77)
isggu (5)
jszpe (39)
kmarvbs (90)
btxepbv (90)
hjjfdj (11)
sfrbkzf (45) -> tgmle, mddejh, tulxgem, ofidu, mjaol, dhqzt
ibvaekj (9)
leegl (94)
lfjtmkg (6095) -> lsteeu, zxkvs, sdhqlxw
itttb (90)
wlajxb (201) -> tgyavjg, eszxg
jlvwibm (46)
hcqnhm (58)
iqygrur (44)
bqifoq (55)
fovkc (49)
aozygag (125)
prcjhey (92)
fetkt (203) -> nnhsuja, kxflpnl, xumsm
qjzol (15)
rufvv (162) -> qzcbtes, xekimqs
dhlrq (88)
mwztduj (75)
ydumax (61)
boygd (13) -> wiayzvp, mdhhd, jkqvg, wouprxh
uyrght (80) -> hvcii, lxhkgs
nglji (311) -> cfaniht, anbcmt
pfutotv (44)
zvwkjew (60)
miftchq (21)
xaatl (56147) -> dgjls, qoiuwmf, koane, fnoteku, pavwo, hpowmso, yehxck
oejqkp (13)
oewlch (659) -> tgffx, eiwjrxx, ksybvgt
dwpqell (35)
mnksdxf (138)
obfet (87) -> iolmgs, piouhkc
kazqnjr (391) -> qngfv, aacegb
kmogwi (1139) -> hkjtym, tgujvov, dkttrfw
behncf (16)
ofosgz (80)
xejner (239) -> jmlznjh, foyfb, pxihdrd
ylyef (30)
lqumiws (88)
jancm (58)
rdkvtq (77)
alztgi (32)
myhrxc (16)
ycctk (1381) -> qtgibw, lkorngt, mufnw
wfovakv (48) -> lppvxfk, tznwmc, utgxfsh, zyympz, asbzj, ijcojo
lhsccbq (42)
tglnkgk (81) -> wrxiwgy, wrfxdc
ptkqcl (41)
cipgxee (72)
ecjdzpq (35)
ykpdiav (51)
wdjzjlk (1631) -> iplyhhc, pgchejz, kwmam
ymhxg (48) -> vohta, ohplzu, edpjix
vuetjdb (157) -> pbxjvnl, jdzbqlz, xhnmlcw, vipurf
skpcerk (88)
hfvhp (2018) -> wewzb, opmmmd, zmqom
afrywlt (80)
amrbhgv (126) -> xpker, gkkrlg, jbzaips
qsrpqe (236) -> brztp, kwwsxez
cdpfk (92)
oksoj (51)
eiwjrxx (45) -> hbsmlf, dlabh, rcjxcou
pzewv (23)
zonni (11)
nkssh (38)
nmvvgr (34)
iteizf (21)
dvfuz (30)
scmiv (54)
qqishhq (14)
egsil (38)
iipqh (299)
icqjyqd (16)
zktnjab (87)
nkskfx (94)
leulsg (44696) -> tifqyde, olkopyn, lfjtmkg
eskdbe (17)
dkhuccj (96) -> kbyot, zhbiaq, hhmavd, xejner, cqlwzk
mkyam (372)
wxixtqj (37)
ilxfa (34)
woczl (60) -> okseah, afeqhu, cnnrj, cmaxybh
rjnzany (44)
lppvxfk (1001) -> nrnmjo, phmtqf, bqznix
uzjxd (196) -> zfnoo, wlaslo, tijkvua
ekihql (1184) -> ezxsv, vonzkut, dkyswuu, uyrght, uzjxd, yjomyth
rljjjo (192) -> sobzsd, ykljt
mfjeyx (49) -> tdniuai, vdjmhb
qjdpk (28) -> wzxei, jopyit
liamld (25)
rjeunph (18)
vscjrx (79)
gwyfm (287) -> liamld, ucqdz
gnmydtk (67)
xspxxb (71)
mwirmq (188) -> mnpvutr, dmvjz
myonh (49)
mupbrv (218) -> phkwq, hrjgaqj, bwvemo
kztkiqt (13) -> egsil, mjugqpu
khpat (53)
wchlcja (190)
tjffhqh (84)
geqwvx (129) -> acxlck, zqnmsyb, ojnziip
ufyavk (1838) -> vunam, kmarvbs, kzdugfh
nvlxqp (58)
izhdt (57) -> gfqtz, sztqzfl
zfhxg (345) -> srneoo, ygmhxm, epumc
wkhggv (25)
jjvxxtt (194) -> ldfsxw, mhkcp
mhzgkxx (156) -> qzakfh, tnayomw
bchlcqs (53)
ymduw (28)
grazu (90)
fgdqr (34)
swrkuc (199) -> gylsj, cyzzsc, blmfs, aonfaf
zrpqdzn (62)
dkyswuu (120) -> zjzoo, bhxdhmr
mjugqpu (38)
gijtd (75)
huhoda (191) -> bpphw, eqsxuaq, gmwtl
vdkxk (90) -> hrvztx, fjhqmnv
huunb (88)
stiln (72)
exxcrj (316) -> dzjyzd, pkoww
bdymucv (304) -> uzsytm, sslltlv
dyscpqo (49)
tremw (94)
uotzz (61) -> xyxtm, cdpfk, qmqrpcl
vlpop (64) -> hshyx, tchbf
rdmggka (18)
owigu (9)
bpqhqbg (63)
aeyykn (66) -> lrkfnoy, ltdrusl
kwwsxez (27)
jgtpw (84) -> cxnjv, zelucu, ygurya, mrsrl
oljci (892) -> asifeu, aoehbj, oqjkafl
xqgwwr (23)
ctfjb (20)
cxnjv (66)
nrnmjo (105) -> pzjbbdd, nvvxl
wydbqai (65) -> ryulu, ydumax
ghdime (76)
cnvyxm (59)
xffvy (59)
qtgibw (52) -> ovvrx, ziypsz
ukkaxy (211)
yurfpj (65)
qvvcx (41)
ygurya (66)
zchulv (72) -> cmxulaj, tetdx, huhoda, blagy, wgypwo
rqzfef (86)
drgtn (84)
goxfpk (6)
bcjecw (80)
njabgq (57)
gcwcs (93) -> dokgk, epsjj
fhzhqie (65)
ccsrkny (34)
onlwq (59) -> ekxxsqa, jlfho, ekabfx
ldnrw (760) -> plumb, yvhilh, kztkiqt, ltbpi
nnxfo (63) -> xffvy, zqmlv, krcoaft, iimfrx
mrsrl (66)
vztyfp (57)
pacsxn (63)
maiimn (77)
usodrg (53)
rzphpv (48)
pavwo (1890) -> mofkvq, fmxtg, rijipom, mgqfa
gcomv (84)
pjxqt (46)
oywob (47) -> ynayo, ixxkvtz
fovilf (44)
ypsme (11966) -> zfkfhfn, fiufzkb, ubgrma, puurcu
etyyw (11)
ccityq (34)
hrjgaqj (29)
dhqzt (305) -> capxp, pttij
dpdjpal (42)
fbqpk (38)
qkrydu (1886) -> leyiz, mwirmq, hhwngc
mufrkl (60) -> wyomko, lafoho, rxanas, vlpop, ulvncs, padxpdx
cssov (57)
wgeig (15)
rythrvz (65)
juptypm (14)
dxympe (23)
ckwooig (84)
zgimdwb (107) -> znucug, mrigsjh
bbhyth (53) -> xcqwjrm, kgmwfq
vyriv (50) -> vwbjuvx, xergqq, wlpfcsr
qzcbtes (65)
kgmwfq (63)
losdis (1165) -> vhmijln, lteyo, viufoq
iplyhhc (122) -> cbgyk, dzohgiq
fpqudx (187) -> iuxgzr, icqjyqd, apmdcz, mhapqqy
jaxidl (86)
xhyqtqz (77) -> swrkuc, ncfuru, kazqnjr
rznnmp (70)
jvhxfl (39)
gxzkde (65)
uiwaf (97)
cfnce (59)
fkgxak (328) -> wpnqifq, xbucnh, qjwfsfk, rcsfkrb
nrcbc (98)
aodnlv (58)
yvhilh (89)
cyzzsc (52)
pjedtl (55)
bvrlaep (143) -> dnrfjv, wndpfac, bezvr
clpekkm (77)
wnyxznj (65)
wonxzkm (57)
vifwkwa (173) -> zvwkjew, txkgx, vvqpffs
qroirmg (45)
mdzkkjf (22)
pmfkdn (14)
qgfstpq (12)
mhydkla (7)
yekjlfd (106) -> ecjdzpq, dcmxxd
gxiwcqv (186) -> zfhwfsw, lovypfn
ifbxvs (20)
lwwyx (41) -> vuetjdb, ciejakr, imjutr, zgimdwb, sdnlegj, gzixhdc, tlvkwlx
tfdbdq (22)
dzggd (663) -> iipqh, nnxfo, veggtf
xwltxk (2001) -> yirnxk, baawtw, msfxkn
tznwmc (1199) -> dnfvldg, dbufjl, pnhibed
uiioczf (130)
rcjxcou (56)
tatubv (205)
vvqpffs (60)
bugwblt (14)
umtfn (80) -> hbylau, dzrkq, rugltaa
cqlwzk (217) -> besihsl, cwdmlj
pxteg (56) -> odkzxae, gcxrx, cotpovw
nbivp (106) -> ndnku, gjcxbx, iqygrur, oxyof
twvib (18)
fyzeso (57)
nlndxah (11)
wolet (91)
pixmx (4482) -> hrgbkby, bvfcsls, tzvawqb, jfdscql, gqggcxb
ctytfj (29)
lwaeqm (83)
cnbekc (92)
ekzvjj (35)
zgssy (67)
hbylau (94)
yonjpz (62)
btcjg (57)
tdbne (72)
edkigpl (18)
amnoi (141) -> noxvvva, dfeyr
gwtcgyo (24)
zrnlo (42)
ndnku (44)
etwwy (16)
hsoxt (62)
kdqjj (16)
cgouh (26)
mnvgaqh (128) -> jntohm, vobeup, ptkqcl
ocgkcxp (13)
ayaouxu (200) -> ksyewek, gpfrztg
baawtw (50) -> nnguamj, yetcvhx
ykljt (13)
znucug (55)
ypqxs (31)
pmgrf (21)
anmeg (58)
fmxtg (84) -> ursjc, eqhxqxm, qroirmg
dgjls (1926) -> lgxjr, hrphtyk, mhzgkxx
prxseo (16)
vhxlart (70)
zyniqni (147) -> khqhd, zrnlo
dtexqt (88)
mqybmn (86)
pljyyn (73)
jzibybz (248) -> zrpqdzn, hsoxt
dokgk (17)
bclicjl (217) -> dxufd, jhcsmc
tlvkwlx (133) -> fjpgybt, miftchq, oyfma, ytivjxk
qsqis (1208) -> aovlz, mxusu
mhkba (21)
kvdrnf (72)
fcpde (175) -> beraw, qqishhq, citugfl, pmfkdn
jcpavmj (53)
bbkfiz (11)
wqbhby (15)
mfvkd (21)
hhifd (6)
ibonrqn (50)
jzuvrtp (57)
zelucu (66)
zneumoh (80)
ljhtov (394)
okmqiy (46)
cmaxybh (78)
phkwq (29)
mvfhc (420) -> wchlcja, ikfihh, ybnvm, cztikzk, qhmyi, uebnns
jzsmy (39)
edpjix (58)
myaiu (129) -> pqmrmke, iizbmoz, rhkbrsr, apwsmv
mnkqevh (98)
noxvvva (94)
ncfuru (87) -> bcjecw, kybsigz, mtcxdod, ofosgz
pttij (68)
eutcl (77)
mzwbtsa (119) -> eceocsy, ecoqyk
wrxiwgy (25)
fydjnl (32)
bsixe (80)
oxcuf (80) -> crobb, xpfxwd
yqnihs (56) -> wqoucl, rsqyvy, zetvslt
mqhkd (100) -> pjhry, ljhxxd
bwvemo (29)
hbsmlf (56)
sduuog (9)
nnguamj (71)
xrhsy (266) -> qbrrjg, juptypm, bugwblt
rxqfv (84)
bqqwmry (73)
gyutarg (51) -> adbolgz, vdvadz
vyozfv (99)
njrfnvt (96)
ruxnrix (35)
sgieno (107) -> miijab, zryrfnw
vpynuf (214) -> akpnwc, rulhhsl
mkbgt (98)
iwyjkz (86)
itxycu (45) -> eutcl, kdevmnr
ytspbx (184) -> nkskfx, ohrraic
ayejq (86)
fhpaqmd (23)
jjqguew (24)
mnfqc (789) -> zqtkn, hhqlfj, lywkfsn
aplbnbx (28)
hshyx (93)
ozfzz (11)
rhbouej (181) -> udkyxw, rzphpv
wchxl (67)
inghbu (1167) -> vcvypf, ljqmiu, tglnkgk
fticuc (1360) -> vleydj, lnczb, igpabio, wydbqai
ivwcuc (88)
peuppj (29) -> oqrmida, txxnutu, fzqsahw
ppiiyuy (34)
mgkkyx (77)
akwfu (50) -> tremw, uwhjd
tceog (70)
acxlck (73)
woves (32)
veksns (308) -> slhitu, lghzki
ljhxxd (38)
dqgivj (57)
sdbksb (171) -> hbkjjtt, zxson
erfnrn (6)
nclwgga (201)
mdhhd (28)
rhzimzq (74) -> drgtn, raqjoxn
rqymw (97)
nkjgwn (72)
vwcygm (36)
acfyjc (85)
iajslqp (32) -> avelbqj, ebgdslc, vzqnfs
dlhiqh (7301) -> rdrad, vmmjgy, uvmqarq
koxiwk (929) -> fcscdg, geqwvx, jgtpw, zorvynv, zotwsb
yjomyth (97) -> oksoj, lmwrf, tjhmz
hhwngc (138) -> ewpbnsk, swurfm
ikdsvc (1609) -> icjur, ebmjz, rxivjo, rhzimzq
mewof (12)
bmugsve (36)
zcgfj (78)
dyimc (54)
iuxgzr (16)
fxasat (57)
ixkicz (353)
fvfek (96)
rycmr (82)
xfydt (87)
ybnvm (50) -> dwpqell, fmtyy, bkcghv, ekzvjj
abbnh (33)
pbxjvnl (15)
lrkfnoy (78)
lpbayb (8)
oeqvt (19) -> grcox, otplae
bdafpm (58)
upevl (95)
jijwa (3632) -> xwltxk, ikdsvc, tcghqr
tgyavjg (18)
bwrpskq (65)
lhsncv (67)
kqaoir (80) -> ytspbx, dyrvvfn, bkldmro, qonfiro, hhlxxzt, jzibybz, slrfd
dlabh (56)
drfwgmu (249) -> zktnjab, cmfkxo
qbrrjg (14)
tijkvua (18)
stkodp (84)
zunhob (79)
dnfvldg (85) -> yjakrqa, lahain
pjyld (10676) -> zfhxg, oenxsfm, ciogjt, ebmcu, mnfqc, zgqzrc, pzksun
dxufd (64)
zryrfnw (49)
ycacj (25)
smmgkir (31)
bymkeq (71)
bzsiwp (71)
wqoucl (99)
njdmj (73)
tzvawqb (1010) -> qirjqsm, muksdck, oxcuf
ljqmiu (31) -> ibonrqn, imezigo
pppxrv (62)
xbyjur (14)
hkjtym (247) -> iwsjla, thqkxpl
ucqdz (25)
ekxxsqa (83)
jbexk (73)
mkkpihe (24)
evcdf (57)
sobzsd (13)
rfohgya (25)
ahmitv (11)
wtyfb (238)
inldh (4965) -> ogvod, agliie, wenii
mieecfc (138) -> lwljcg, acfyjc
yrlks (44)
gcbcyn (289) -> vflyupn, mbwenqu
xevhcxq (86)
xayglgm (21)
hdlovco (5)
awagc (18)
zqnul (38)
rhkbrsr (31)
ejzeqxz (51)
onogiv (30)
ltdrusl (78)
yzptgez (29)
bkldmro (212) -> bsixe, afrywlt
zksmijj (189) -> zsvuw, hjjfdj
pqmrmke (31)
gzixhdc (124) -> ypqxs, setrric, smmgkir
ytivjxk (21)
wiayzvp (28)
hbkjjtt (61)
rhdudt (83)
eqhxqxm (45)
gpfrztg (54)
slrfd (340) -> etwwy, qldijf
iolmgs (95)
ckhip (88) -> vhxlart, rznnmp
pcdjo (63)
ojnziip (73)
nvdouwn (161) -> llibmc, jkfob, dyscpqo
gbnxgny (12)
vzqnfs (31)
lixqwd (35)
crobb (8)
vdbihjp (69)
llibmc (49)
lkorngt (132) -> tjpatnk, nmstp
ecxfenj (78) -> urjwj, jesiypo
ekabfx (83)
opqoq (648) -> mjlnaz, bymzb, lmqaxz, lageym
yfruc (303) -> pmgrf, hsfjd
fkbrmim (71889) -> peuppj, uobgj, llventw, duepwu
nzwxd (103) -> wykkwa, oydxsh, bozlg
kcuygjx (71)
hvcii (85)
fjhqmnv (57)
txxnutu (97) -> bcyarwn, uteosk, kjjyu
hrgbkby (53) -> saowgr, lprmau, ntabiof
xhnmlcw (15)
clnkvox (33)
bhwca (76)
uojcup (985) -> ttnnyy, yekjlfd, pdxylvu, fjzpjk, mqhkd, ibiwh
mxusu (45)
ixxkvtz (71)
gqggcxb (29) -> tzrppo, bugfhhx, drfwgmu
bsrkr (21)
erkarx (79)
kabcmf (51)
tknmww (92)
qgvsuqv (206) -> jhgsgy, enbnfw, uflldd, jvhxfl
cfaniht (17)
jrgwnfh (57)
rdmrzdv (99)
krcoaft (59)
ifelr (77)
hpaggeh (88)
wlaslo (18)
wouprxh (28)
hhmavd (359) -> pxzdv, qjzol
bqmqbi (47)
aokpx (70)
lteyo (157) -> mfvkd, swpfak
hrphtyk (19) -> xjcprt, bbzmsv, berje
pkoww (39)
jsjaxjk (88) -> aidknm, uiwaf
uebnns (127) -> iteizf, lzxrfk, tlfsn
wcevmtt (77)
yxkldyi (90)
qpefm (823) -> kmogwi, ufyavk, evnlr, rmlddp, fticuc
cmfkxo (87)
qldijf (16)
nstdz (65)
aoehbj (182) -> dyimc, scmiv
eceocsy (35)
hwrxn (53) -> dihzy, ibysnvc, zunhob
nglea (50) -> pfutotv, yrlks
fmqjogk (24)
tgblta (141) -> elmog, woves
jkfob (49)
vcvypf (113) -> mttvnpg, sduuog
wlpfcsr (99)
lybovx (18)
mbwenqu (34)
obkhwze (38)
vleydj (173) -> mhydkla, msthql
uduan (75)
ykruy (39)
aiunuvn (1629) -> gjrqs, ukkaxy, lijeejc, zlgpmfs, zksmijj
lqavsk (73)
afeqhu (78)
veggtf (104) -> wnyxznj, mnwefbn, fhzhqie
jbbivz (16)
uzjejte (48)
jhysc (274) -> cldbz, cluxnul
vhmijln (97) -> tmyhhql, ykpdiav
nqvflzq (61)
cotpovw (91)
yookz (5)
skjtvyz (18)
szutvca (32)
navhthp (136) -> rrywqx, vjxmbzm
okseah (78)
ebmcu (30) -> glsrg, ckhip, rqhhyc, jjvxxtt, rdnpoms
wuybunc (54)
oktfn (37)
tvnco (63)
tfpuqgs (24)
ijmfnt (28)
zswyy (36)
sqiac (24)
xbucnh (11)
zmpwz (12)
cotvk (91)
ohtply (49)
ysigfem (177)
jlfgvr (72)
kplegas (86)
mbezs (71)
rprjk (205)
jlfho (83)
melsryt (58)
oenxsfm (275) -> cuhrgp, qlgme, bbhyth, dnzdqz, ezdhr
sdnlegj (207) -> hdlovco, mmerpi
dzouqwl (57)
rugltaa (94)
imezigo (50)
iizbmoz (31)
vipurf (15)
awufxne (2141) -> qllluo, wpoga
gkkrlg (36)
dfeyr (94)
zmlmsuf (23)
lzxrfk (21)
jhcsmc (64)
ksyewek (54)
jzcmf (24)
xumsm (16)
eiyxf (32)
intfltq (33)
yhyxv (160) -> ahmitv, ozfzz, zcdzv, rhlllw
jopyit (51)
rmlddp (64) -> rufvv, gxiwcqv, cjcapa, exwxepj, qvbfob, zimrsr, nrcbij
dnazkh (80)
raqjoxn (84)
cgfykiv (38)
tygnc (13) -> ucxedq, jgwvp, kgevjdx
ojhlp (137) -> zqnul, vmvxwar, cgfykiv
hpuyku (82)
INPUT;
    public const Day06 = "0	5	10	0	11	14	13	4	11	8	8	7	1	4	12	11";
    public const Day05 = <<<DAY05
0
2
0
-1
0
-4
-5
-5
-4
1
-6
-10
-9
-1
-1
1
-15
-15
-13
1
-2
-13
-6
-22
-10
-15
-3
-19
1
-26
-18
-13
-15
-15
-10
-4
0
-35
-4
-37
-29
-30
-38
-38
-13
-36
-42
-5
-28
-17
-34
-41
0
-41
-36
-46
-7
-51
-49
-47
-45
-30
-58
-33
-22
-38
-49
-37
-44
-53
-18
-66
-46
-47
-58
-22
-34
-41
-13
-41
-30
-34
-15
-38
-60
-61
-73
-20
-62
-48
-19
-40
-69
-86
-75
-9
-29
-2
-48
-96
-46
-89
-76
-34
-65
-38
-69
-5
-12
-54
-72
-87
-23
-82
-12
-24
-16
-115
-83
-3
-109
-72
-42
0
-48
-9
-34
-67
-83
-20
-33
-76
-81
0
-16
-106
-58
-91
-102
-123
-135
-85
-109
-61
-70
-103
-43
-104
-119
-75
-129
-104
-87
-95
-63
-1
-118
-49
-71
-34
-129
-52
-103
-98
-132
-119
-50
-36
-35
-24
-98
-139
-58
-25
-93
-82
-87
1
-14
-109
-89
-25
-96
-60
-79
-5
-124
-62
-44
-98
-119
-189
-66
-121
-151
-4
-14
-16
-154
-39
-51
-127
-13
-129
-98
-28
-6
-174
-169
-139
-22
-4
-2
-48
-62
-58
-163
-169
-124
-104
-205
-211
-43
2
-135
-41
-88
-208
-28
-124
-172
-223
-76
-98
-146
-55
-209
-197
-134
-93
2
-227
-39
-235
-240
-206
-70
-65
-38
-175
-198
-80
-10
-246
-228
-23
-84
-177
-81
-119
-161
-246
-75
-72
-243
-78
-233
-50
-204
-7
-206
-220
-46
-249
-135
-130
-143
-42
-65
-52
-79
-112
-147
-273
-54
-88
-200
-227
-24
-166
-113
-189
-30
-174
-55
-107
-14
-144
-148
-46
-263
-225
-85
-14
0
-197
-10
-6
-93
-153
-302
-176
-182
-251
-213
-9
-221
-111
-39
-134
-214
-155
-321
-212
-2
-207
-298
-124
-28
-78
-213
-194
-111
-159
-171
-240
-175
-99
-63
-162
-115
-147
-265
-153
-325
-19
-134
-49
-240
-322
-79
-61
-66
-127
-292
-282
-49
-114
-89
-16
-353
-181
-151
-72
-290
-313
-279
-351
-111
-220
-172
-98
-28
-223
-58
-51
-194
-138
-143
-308
-123
-28
-347
-87
-115
-295
-148
-116
-108
-267
-51
-346
-215
-44
-379
-309
-237
0
-212
-119
-231
-140
-270
-91
-146
-245
-232
-119
-131
-398
-264
-181
-303
-186
-404
-280
-412
-375
-292
-251
-138
-36
-18
-217
-117
-56
-272
-312
-160
-70
-130
-16
-279
-159
-6
-268
-283
-259
-197
-378
-24
-45
2
-390
-50
-246
-233
-294
-231
-364
-316
-189
-231
-74
-288
-286
-25
-317
-371
-434
-249
-54
-151
-234
-95
-158
-335
-362
-28
-438
-103
-173
-332
-97
-444
-459
-255
-295
-26
-120
-2
-152
-432
-191
-63
-313
-465
-1
-228
-468
-331
-231
-123
-403
-479
-441
-19
-75
-264
-483
-371
-277
-343
-52
-160
-489
-182
-338
-461
-233
-459
-291
-54
-61
-352
-276
-206
-290
-456
-81
-14
-331
-385
-241
-149
-421
-24
-12
-297
-93
-412
-478
0
-219
-157
-328
-344
-367
-343
-123
-349
-441
-197
-317
-165
-329
-515
-74
-443
-197
-75
-52
-534
-330
-178
-509
-199
-502
-429
-362
-422
-555
-183
-221
-461
-338
-496
-28
-507
-276
-271
-511
-298
-426
-144
-112
-198
-496
-158
-350
-326
-219
-315
-394
-555
-10
-422
-420
-216
-386
-344
-374
-567
-15
-23
-434
-44
-346
-110
-561
-198
-505
-103
-374
-107
-298
-38
-26
-171
-235
-324
-427
-359
-130
-500
-31
-221
-402
-240
-283
-47
-20
-422
-453
-31
-470
-115
-97
-120
-41
-590
-437
-53
-563
-440
-254
-545
-256
-341
-325
-417
-9
2
-442
-370
-317
-404
-498
-340
-402
-506
-381
-484
-582
-274
-157
-325
-445
-200
-56
-324
-31
-448
-407
-460
-84
-44
-387
-515
-206
-617
-322
-168
-340
-553
-629
-407
-344
-166
-619
-313
-222
-139
-199
-93
-474
-246
-165
-503
-636
-40
-298
-629
-294
-73
-438
-628
-632
-464
-512
-496
-683
-406
-241
-41
-251
-95
-264
-565
-183
-256
-634
-436
-660
-256
-528
-405
-4
-184
-513
-338
-476
-393
-449
-373
-585
-197
-334
-165
-161
-559
-424
-203
-1
-234
-511
-562
-234
-324
-339
-422
-269
-399
-249
-61
-630
-648
-37
-190
-196
-478
-150
-264
-40
-409
-600
-253
-708
-130
-463
-568
-292
-10
-350
-280
-617
-25
-218
-310
-72
-484
-741
-701
-284
-654
-442
-679
-718
-360
-488
-563
-192
-282
-342
-368
-95
-213
-511
-767
-194
-216
-574
-496
-770
-145
-652
-203
-26
-74
-564
-533
-605
-236
-183
-170
-755
-98
-174
-478
-476
-194
-167
-439
-724
-605
-364
-213
-35
-67
-378
-452
-59
-340
-663
-762
-506
-650
-223
-785
-53
-32
-241
-214
-274
-602
-308
-182
-367
-351
-327
-157
-526
-424
-229
-66
-669
-571
-538
-240
-379
-528
-667
-401
-832
-524
-651
-91
-102
-27
-586
-128
-836
-35
-653
-809
-109
-70
-707
-387
-351
-41
-7
-149
-10
-614
-181
-560
-24
-257
-305
-303
-91
-848
-249
-401
-624
-265
-751
-752
-367
-554
-715
-419
-449
-570
-62
-568
-203
-341
-751
-657
-347
-751
-639
-742
-307
-861
-706
-487
-644
-612
-390
-474
-565
-174
-263
-377
-307
-383
-390
-484
-722
-806
-874
-247
-570
-221
-51
-215
-641
-534
-427
-277
-647
-912
-787
-834
-270
-607
-354
-593
-740
-25
-222
-500
-494
-940
-442
-592
-938
-904
-580
-20
-938
-671
-199
-677
-917
-903
-206
-411
-917
-424
-300
-889
-501
-100
-117
-315
-678
-664
-579
-749
-636
-949
-642
-968
-343
-628
-190
-700
-705
-339
-240
-216
-628
-917
-724
-481
-900
-74
-291
-234
-934
-642
-874
-594
-955
-951
-341
-463
-706
-735
-556
-681
-985
-285
-604
-44
-153
-14
-78
-958
-44
-338
-765
-787
-487
-441
-518
-772
-632
-70
-74
-630
-362
-533
-684
-328
-407
-193
-727
-230
-454
-141
-568
-802
-326
-725
-464
-880
-990
-34
DAY05;
    public const Day04 = <<<DAY04
nyot babgr babgr kqtu kqtu kzshonp ylyk psqk
iix ewj rojvbkk phrij iix zuajnk tadv givslju ewj bda
isjur jppvano vctnpjp ngwzdq pxqfrk mnxxes zqwgnd giqh
ojufqke gpd olzirc jfao cjfh rcivvw pqqpudp
ilgomox extiffg ylbd nqxhk lsi isl nrho yom
feauv scstmie qgbod enpltx jrhlxet qps lejrtxh
wlrxtdo tlwdxor ezg ztp uze xtmw neuga aojrixu zpt
wchrl pzibt nvcae wceb
rdwytj kxuyet bqnzlv nyntjan dyrpsn zhi kbxlj ivo
dab mwiz bapjpz jbzppa
hbcudl tsfvtc zlqgpuk xoxbuh whmo atsxt pzkivuo wsa gjoevr hbcudl
gxhqamx dradmqo gxhqamx gxhqamx
yvwykx uhto ten wkvxyy wdbw
kzc ndzatgb rlxrk hfgorm qwgdky ndzatgb rhvyene qaa wxibe qwmku nmxkjqo
qwx ubca dxudny oxagv wqrv lhzsl qmsgv dxs awbquc akelgma
rrdlfpk ohoszz qiznasf awchv qnvse
ggsyj czcrdn oolj sibjzp ibzjps asp
vbcs ypgzae xcvpsr ptvb leoxqlq zmpt fhawu yfi tvbp
ejkr qlmag nsz jwpurli nhsml asksnug mes
kkgkjml kklmgjk kjgpx iquytbj eccceb mfv iuyqjbt ovv
uoklkco zzey sdfhiyv ytdeg
azr mjv raz arz rdfb
pir dafgsah dafgsah kndjbml estcz yjeoijp kkcws ebq puwno
iqymwc tac vlqc bmnkz xustm leqi
gwdjed cfha axz xjuq
abfjsg pahat qlj zan qsfn iozfys jnvu bis jakggq
afwuejn zrbu zurb hrn lwvjb jnwixla aufejnw
vkqn cuzf humhriz webnf uzfc zfuc
eznxd kgbfy jqyc net vzfege tprzyc
mqnapzn vrgw ilzp vgw
aie zkkih fhpwu bbn fhpwu wvxxgmd
ksoasrn yll mvdjxdo wydymx dmodvjx drnjlm tcjpjhj xzakb wrsbuwl vaygdwf rsasonk
qahbh tfhkl apdqqpm tfhkl nsox
xkelwve mvdmesj xrto tgku gkb bpe
nni nyylpu cyusxe zydeyok yokzdye xiscesy
itwsfr eqwrx igqkvif whklwdb
lpa hwci suwqfln xis sfht lzek ajecd
svpf eulute eya gvmsd app claria tjtk zjt agdyemi bixewo
gmzglxi zlgouy bejg kte xlf giquj mjeq ivjkw ktbhaga hoffyrt
wwjy dtf ftd agei yde xhbfo fyridy
gexcy hetkz ufflrfi frifluf plb kqre etxo elg henqy fspm
khaemn buec ichau wxctsxg
cgmv ujyvcuu jta yux ccx skrafkn cmyc yidqhv ltb ycnajry zitq
ybsahqn pio veeze vdztjz iedou pio sue ijbz gvqncl vpa ijbz
hkfi xzrsyke hikf mxolx xlxmo ungfc tst xjzd
tpx ioprco qixlv ipocro
oahmwrv homvraw vws ntmbdvx
fxlg wnuz ogt bxgtul vmfh nwuz glfx tgxdq bxfv kajuh
vrhqn nrqvh tgogb vya ragbro ulrz uava kexoi yav vkfe
bxxy tyxgxd oabsud bauosd jlch bdmrqq wqhjwb ayblb hclj
sfzsgsc sfzsgsc jbrvh sfzsgsc bdhy
wixleal vhnqbfw qwfnhbv woco oowc
exkkwz wekxzk krxbua nshxqgh
gkn blxgui nkg gnk
otsa isqn otsa isqn
ude xedl ude xedl amkktp
teroe yuvbd inf mpytuvz xiq xqi ovqetn
zyq ybeifwx fvoqp vhoduy bcq wbxl
zymiid vafcqv vjbmekf lgxkma bjti qfavcv iqp fnbu lakmgx
rkaqvd vylkh jfdxh imxxg bbrt imxxg rkaqvd
yajg qnhhs bzmb eyk hijcg tkij iwr jvwp dipzd jvwp
btzhw zttheyo ravsbz bmbba majoe ykrs tbxqf tai cgsvpu srbavz
vsyczfs ymg vsyczfs wxlwaqb oouio owek wxlwaqb azvbqiq
ghrapd ghrapd wisq wisq
znmleu aztnkbs wxc gycxd vqenhh geqyo rpjg
kxbom gzz zzg zgz
dfsesc okwb dfsesc okwb
egpwqbe djlk xpkxa hoo eepbqwg
nxdfror yfhkhn zgea fkspva rjgg bnmq ddsf rjgg gkinm
vdrxfom wbdwu dhkt xtvzc zjobo aqvgrt
svddsgz mhcrbcp wmpd mhcrbcp klim ddlnxv wrdftrc ddow wrdftrc
obxr wscs new brxo wen epns cvjvxts ilnc
rwezl vmbut kgblt xfg vnhlebq nzqdzxm ynh wokrezy zub nzzqxdm
vephajp bzupele mltzglh sbgn vephajp lhve mltzglh
slajp kyaf vlnvy srfietn ayfk inaufex fanuexi
vazwg kjg qanzso ptuu vvlwq uupt kohhql jkg
xmmmpky rbqimi slvxsf tlcwm pbf pks iucx rbmiqi
irkup jvu tkeioz avdu suxamf
tmgih ldca jswka dblzzt rap rgqyy gyrqsk nnnn pok
pdbjhrl gsvxbqr nqfkhtc ngn okbgzd pdbjhrl oostjtm okbgzd
mzqfdat dujh aeplzqh acbguic vlzdt amyszu amyszu jqecky bhl hjqnimq xoy
dszafr bqampg epozj sfrlpe dszafr wfurku sotjpg wagtnxy
jbmo jbmo plbfkvw bkc jbmo
ehelldu vrid unnf vrid xqiu tbibjyi bmbpsmq tpqyefx xqiu
rpgm zzbj cjgfdyb bdjfgcy rzqecd miyvfbu aqlkagf hsuxwgl
gvywzp phvnd ypwypbm yfelxx egbr lcfyz hecdhkj xxfley
tsmebin tbsnmie mkijj ijjmk
cghxrqs vzxle wrfghv skighgt zviteab plcrgv
ezdirp rxkw horcek qcgny inx nikb tigzp
eidk sactjci sre vkapava owvf eyds eyds
vvjdm uye tjixj azklizl pnb
tcrimv xye twii xye twii tad
mtxcg lwjxdj zjudqu ekoujd ysf ajtfta dkj lwjxdj
aowhmvv kkic kjize fnohl ukx remfmii usbp
wkossu limxmhp xnoeocb wkossu lnrlqf kjozfg xeulstx sjncsw ekaimuv xnoeocb sxjegcg
lsfe zpewzlc yhjyiay lou ukhi lpwezzc slef zvtidgg kdeseq enka tfvgudr
ovfsa vuv tbtorv tbtorv gmxn opspw lli mfzvkv zlyhr oznalr
kugrpw sduq rdc ciaxwir ylnzwec kugrpw sduq
obevuau thu jpyfvof rpawwo obevuau gsvoutr quiaei
xpgua pbxa pxgau kdan
ohyzqk abxgg xozgai nib axozig bni fucgykm jpkswt
jrgu dmozts jrug ufpho
qojzue uzeojq txuhj eqjzou
wcvj qwlravl niyxf oiaptlk wlxnnzj jgdzap jgdzap lfgn bdt sfga adrypo
ylah eedu rvwdpmq eedu ylah
quages kmla yjqua dzxcfam srjag wujmcv qujya ssaol uzdwi
gdsppz yqxlish yfkjbbf ecnzu ejvtv cdjwre
slsls pcmrq zax btrc kliv ntho gymkk kkq pcrmq mvnw sjfegpx
ryz jfw eki wvibww qdzylg whbagp ffrfjg wdhnqpm hcrz
tcjqfh tmvzp mpztv vpmzt
xood xutgof teqov fqyyub oakm rzaheiq
axagoq jawbz sexucp sexucp atenr edekcwn edekcwn agl ecj gbje gipivfq
poqv qopv bos flhghs gshlfh
rxd dzphnb bwmna vxd rxd sbk kuor
kqeelq jqbyh xczqzqe jbkmx kelqeq xqcfqn
jdfy qzjyz xvqyo jdfy xvqyo
vyoqyd pwayqag eygmdt smakwc veftikz fzeikvt
aozgkne mpd mktgoew eepp zlwycr eepp hswbxcx nmi ddnfr eepp
dgpfp cfhhqdx vjrb uyimbm byx hfdhxqc
fxq jcouwfy uhuao zsab xjao
noudveu egxyuqw hmnnv vovt wmqkx syatiac whkd
gxyzk opgb kjxp delavq hsnvk kfn irkcfq lvc aadcwy opgb
exuiupk ddiiyvm nsggpj ddiiyvm nsggpj
hhjby rfejzp akxzs nconlt rynivtq voloj qwhhll ubvx yxuacz miuwxh ppe
uspqvx supvxq cekv niddfuw
optzcag sra ajs ozacptg yxkludq jjpvldz mxo mox
dko qyec iuxbrbj dlz jxribub
ywlyz vipfh amsfr fwiozi tahjov tap rsea zwlyy oqdyfbo
xeqml jwy eguc bvzvh
crp mxsihvo wwtg gsypx mxsihvo qpfw looca gewvy zjqki tdkuxo crp
mqlnzm yihsvrl hhtwcv kigymqu yswki hksk vbiujq xeqz irzcq cpnz
zxhfsw uuyhwid nzabem mmfk wszfhx shxzwf hqnrvsq
hfjajdl qwmk hjdalfj mwkq gqbku dsszk
fbiy pujq htgaqqq yro ztpe yiufb fnpi ggchdgz
sixq jsboan eoie msdrwzw sixq njsrc sixq yimqoi
pbxgv kqmi hjuk bbtrlta bqwm bgehofj ainqhm qoypsil manhiq ogebhfj lvmuo
wnax aen fthpcke tcz yadjmva mydavaj rcfkc krfcc
lkatiw zxliii usdj oopxl yylv bkjfy gtlyjv usdj muqazdb
yqonaxv wqnvoo hfpll oyxnlfs fgajc khhtzr hfpll gsvvipz wbjxsnp dcdikt hqw
vvuv kspmnz zvmryqd egvuz eazkhz kspmnz
xgq dziwiym gsl nbzmsta ccbzn yalof dbbugq aar ywmbvk yofla dcwb
qrtyhhw xeyo vlym ulzzbl hrxyb qeyu jqdkewk oxye evaxz kybc bssyt
eqrf cfyy kwhohw ozg jsc egz jsc
vct cet ixxvmz ibhvndq eks dpi jzfwdqv saeh jqzdfwv vwfdqjz
vus vus kitvvgq wpi alfncf gzj oxcy fith oxcy ecbsr
uacculk guwhwdp cankcv yswy bmby sve dvonm nran
ydftm wszgaex rgbw otd dbet lhsxndd jqfyx
vhawg hwagv uagy fveik nrsew zujw hawvg dzfmt agzgw
uqdj talb uqdj aizyuqm
pbbejee szdtohv tycfow xwne qzlqy dxcwejz pqdqrc wfyotc gdqt uxaeug wtldm
hmzmd oyp pyo opy
qwdh kwpll kwpll zsbez uxg klr uxg
myqr zza kqpcos adsql eumunrv qlaeumx
acyye xvdewe nwkhuz bzcmx asw ostiwk mfzu nwkhuz
memq uqadd kfj dses lrxb hxygp dsse bxbr hgpxy uavrar
mjmk lsdttuz qjkg yfthmkn pram
pctfq aly usim shihap uims xkfgp ksrbn ifvsyl
cdma nnnu hdm dhm
kpt upgsm ohvrrqf qwps wjcbve ohvrrqf
wowphgb nteme otizypb eumgvb puoctli opicult wbohwpg
fppz ftkql sbut lkqtf svif viqhlnn buts lljhbd
oqk uinby rqy vbjhf oul hzfo coca glpy brjy yglp qnvhvei
sbbwr dnyrux gpikv nsx aawyeq uhtucwq rhxzy jgx bdgdrl dnyrux lgfgi
agn mljz hgmglem popu jtapub agn
ehfpgr bnobvg bnobvg bnobvg
ozgzedn godezzn art atr
urz rzu xzyc rjhwi kgiodi doiigk layr dwbxu
rkcbav pnp bpsmm ifivfe csouqpw fyswzbd csouqpw bnjt rnnoxed
hpjgtcc ctcpgjh cchjtgp lxn
cinokbx uyaz uyaz uyaz
bphfwad bphfwad bphfwad yml izlhlb dvjvo jeropar
ocgftcl wshjk zbinw fcotlgc xdj nwibz
zbze hllno rmq invd gupoxr gwumc vnzj fcvvhjo dnn sfsxw
oqlhkz hgf yxiahks vhzvl ayshkxi irmwkmq
apeqic ahwu abxjrd tuwrd pynnil eohmlgo lafx ybpofe wbznxv swuafas
cpg jpsfo jposf rer ixeydpz
rhqrwvn wrhqnrv xptms jhc rnqvhwr
zfpl tukxzda lifkqtd ynfuno cttx ctxt tlqdkfi ueswv wbipfbe
eblw bwbjg fuu qqm qtv qtv isbl denfcb
ick yqwcffk pvcchd apkjyc ouu uyfe nplid ick caqscs sddkx
rtzh idn snnw xmlou idn kdhenl rtzh ujwttl pkynkhe
dnwha fpv dnwha iqi xggepo dnwha
yjvk saay enxqhw wigoah dzasyr nnt artl iqwia jpp xmfr hwigao
ryt heenuai ytr gqew hyb byh wdurx kmd adgjz
ypdqeji sfkkfhn stms cdmyh nqllx utiphia gxbx zflhtgo yurztx eni
pwlhlt lhlwpt rfkvlgr tucajej ckujc ntcyae xestygt eshmggk
gtfb codwc vjtli ffmjwx ruoekt cylrm ktroue dfaxzvs kkgejzi ewucgu jyatrum
ersbag cod xssha aqzbe kxu bzghhqk pbs bizvqk bhbbd bps
vhci ypxf bxzor unngl xilpzpk civh nykora vchi
cyb cceu negnld nbcfs pxsjgh xah nbcfs nbcfs jabpxg wtanv qhztvr
cljgzkn lrdeina hrjoz kdgpn vqkmpal nivk scvnu vzuausp
nif fin uxjbip xxztsn yyo opueh zxs qnso paedey hsd fttvqdn
gbnkmpr afo aof ryyudy gbmpnrk
uaa npb dkit npb buadan esv npb hwrj
hws dfgq fcyty qszhu chyxxl ytmpb azxl jrsn boqrx
hkzlnkd fkilvog xbubu fbgbp
fgi inmay uliytc vgkcw qsoe uliytc isjhix oyir ocaq
qrzkpm dpzetbr zommsxo cixg nwjyvp bet wyjpvn cgxi tsncd
uvlf lufv ulfv cigl
uwwf thr kdq fhjmty bvxue vcwwmk kdq nzajq bxkf
qcwduju idxaja qcwduju idxaja
fnarz pstzfne nco qzf kcevoo qwx csvsxga pstzfne
twug xrwy uoctfl bkh yxrw
unpdnbe apf cvm bpullu fyels tjpri jyw unpdnbe xfyekay vhk zpyb
rbv psirdv psirdv mnjrp qpwc vicismd qpwc
zjj zjj kesyhow eqcfqy vqy
zazpd gmea aobl dcs mage hqjdpwc bvxr srw
rhcdb nzsa jgcgc rhcdb wxs vsvvptn zvckqo wxs
unyet prchn fiwter wvgknes dvzbxfs ufet neuyt fczlrx bpocdci vdsfzbx
znfev fwrdarx knqkv ojiv ojiv fwrdarx
tbtlo hdashg kyspxm ypmkxs nmrk
fzr zqxaszt frz xzrre
shueb iraetk uhsv duvah uhsv zstysc nrfllbc emrknka
vzkrmp mgtkjnw njr bwjgp jdwyyhv yudha wbvmx ewu urhiioq
yjq xxr swvm aipdj apjid tfsq gfqg izrvhev
iljuqt fpo fxadit iljuqt iljuqt
zrj poewso vsje bsprbmc vsje yfwf ybu dmkqib ybu hlrpdi ymh
apxaeq bgdm mqty whyay mnuzfgk awm bgdm mwwi ekw bgdm
dpdbfkm crrg mkph kphm grcr ukbk
ilqm wroz mqil qlim
pnlx nwadw uabelu rueamxr wjer uwge jwer ywagrx
akuil nkh oitq werli werli
fkmhcr ieoj xfsa xfacoeb tcg poomcme vck zmpc djcqgkf kft
csyk qni hqfrye zyyxz ggynzad pjpokmu bigqa qie
lkpenw zyllii qtbvdq zqnu ichftg xazped agl irhlbiy snlwfe twliar
acsrba dzz ivylbl rfcdd rfcdd qcg
zbui fomvpx zjhmgl sivtffu xuhswzt fzeid tgj mzok mozk afbhuje tzswxuh
nupjiat fdxkbn tuatp jhdfnub yitdk yghqw nupjiat ibi edfv tuixw auwjm
focht mnprh tljj ayp
pjdnl uaoworh iqm gic dqlu spn heuymio
kvg ferrvhp unvzsd qdcpd rji zpch
nhvay chuzg pyhdd hnmrnq zeidhf pyhdd ohy hnmrnq
boa sau gxh grx
gwo utwpd zcsrx gow bnm
xoqniyd hmithl xoqniyd hmithl
yqqsbzo stca zcsjnqf skbueeu tlbkef mvqbg igzr wujuz yqqsbzo kkfe
wgzuepu wge fkrxuag csenx tkngoz wge azueyxs
get xiryxs xiryxs xiryxs
wammvx edy hahetl xmvawm dye
lscxxgi anmax quo cqprwn imocarq gnbfhe rcnqpw
znpmid yaluvzn ydm ckh uhso rrk wbby lwxsu
atppk byf dzz uift nqejgm njgeqm
dtqmy iog ahub habu
hkthdwt pfxlwsu hkthdwt hkthdwt
tsuiue tsuiue yais tsuiue
swooqmp rqrcs ngr vujrq inuu rqrcs
dhu zxdfiyv xuz xuz mgaty mgaty
kiiiz zco qdv vfgkj rders zco
trszp havbm redpeqk gktp ifvzvwl yfoxnm tzg avzd otiouso eks lqlutwb
cfiru lpdy kpeas mdc lxnjjqz nqyyb xkjsug rcifu dln
jga ijgkjo qhbnupb ofzqn iokjjg gaj lrh pkynrcr jgatk
bexwc tat tat otsngaa
feh mjxbs ehf cyfhlv vvdgdu hef
njlvq ojwaes awsejo ktyvxd qeyeze bpoaj ulgngn zyeqee kqc bsdzzvq
hbfp vnhs vnhs pko pxnxgm
bmy bzpn bzpn bcfep
cju nqjy yjqn bbrj esgzw swgl bjrb
cxvrshm rbglkyv kqwzcyd azqr ckwbbew fhgqv nfk lactzh ssqpwbr wbewbck
ptcb gqkb apcc okl jbbgk qni bqu slydyo qhh dqd osv
zbisefn bmxcljk bmxcljk arkamus vpq uxuwvb
ksik xbzk lahh ctfur sxh rduokr xqou zwbgqsp skik
hwhmfk hwhmfk bjpxzg qqftmu ijyv igvayf bjpxzg
askxqew tibx pqaczy fhzyec echzfy cezfhy
omzyy mbzfvsn kkoff qgqn crnnkn krx oqp jhn anb qte qxt
jypnwn vjbnbsl axf pldxbq pdoy rmxcvig cpad yhah rzqewkg nmzkkr erjo
visidzp bujlfn xuomjj mjnqn wgflg skb
oer oer lfi zyqnem lfi guljz
fannhwu wafma gcje cvcia qwyh ugtbpa geufqg
kwtjib pqwai tdmjj kuxr euzl rxuk
ovi splc hflutgw hflutgw
gvel gelv aeiygth elvg twwr kivxrrj jkmqa
bas ylxbdgn yliv pytkhq haujsyf fggrnbc wsgree rfnppcx key gvdzgfy evdtrrz
oblab wpgm bpyy xuroy qhb adqko
hneb law uzms fhhk yjymdx wjla ixfh yblh
qlvsd bxsq hjaq fuwspzu hyshq idbabc rqcih ilixp wft rglf lmqm
qdskj two ckd qdt hzjvd woo fmmuw
kumc zywzq srafcbb ihfu kfvav
qlkkrq qlkkrq qlkkrq qsc
hob bpecik zqtrfz iqizeu plrer epm zqtrfz xrekeql xrekeql
warszd sxyyorh sxyyorh eztjf warszd kszp
hjbrax liumjue liumjue liumjue
rfnqd folmiu dlicln pdyk uqd rfnqd
mjdu lytfvya xomdujn leaqiyc lgemz lihfnhv zgeml koukz luqda
yqsz zedjmwn aep qwbhd yqsz
etg rmovps abizj yqr kib
yznxec sfqkd ofkzep njr hmeym nsh xdq
ryoyq heoo zuo udvfev ehoo axcnbpu oeho mfenmd shrebzy
uaeh jwllsjp frkhqsy uaeh
giofw hwceb euikqp ldmb kqpkxwv namazcg hqyyzgs cglsqux
qledbd qledbd kbwo wgfmgp
olbsca muxw nxs locsba
gbxxgj xlzm gws pkpwy ofkxb sykhdo nbhrv
najr bfk tbqkm hxabe nvr mdi dmuujr bfil nyripr zcydzy
kiczhcn dfgylw yzkwk nytijj pceu yukj ekaol xpb uep
acyyxn rwczsud acyyxn payiek inusyb rwczsud
mzssokx bshs bshs ocrvlug nzsgvch riejkrd jkj mpmdgsp kvixdfq msmmx
uaxy wpvhf uaaq ranp vfhwp iik kii nvh
shecxef nqpx jly dzm qvmpu kxg hdg
xembm yzevult ljrllc yrlskyk zas wstnz yrlskyk vasra
yoaxppi kzax hvxfezf mek teo cbtlrfa ncxac yee
dzfpbi cynov dje vxypba wcwww cwnu cqtp cnuw wwwcw rkzas
xzwdt jcwv anb xzwdt
fodgjem fmmrsfl eovsneo etzutda paw fmmrsfl jcqql
yfztt alcw nwdmd afgknu njxkj zykz cvv jbnl han iatmruu trqls
yas hpulrmf dzts sltg qsbw fjj rjymnnx dkkv
hwjtgd abmb cfw xoumxn xnoumx cxo xnxmuo alb
hnl zgdiip lrddhl fyw mporhtp waedf dltdfmc lyipoth ubmg hnl
wxard wxard cibp nzquvb muuslvw igvewfh mika wxard
cjqjhva rrhzy qpdc nqnyd enbdee ewrhp cqdp xekgjai
axtmxb axtmxb phl urdqaar urdqaar
umce jult bkart dgdvdwc kqzlzn nqkzlz umlxx cmue xvehqag wxifal
lwsuc ski ubo ksi sik qwcudv
husdv tssr gfp bfzbrp jtmk svvdpb uvshd zbnpdmj svpdvb
nnbvf xbb dobqk xwloqca uxvqti blcwxpu kubwu nognin goywn
xhe dhddftc ggltd dhddftc wspf
jodq cgvnk lpl wkwwlqd prfby bpyfr tbgyqm
bdebxj cuvow jdwdxw kuzh dvxmsyb dyvcxo psf kjnoe odfwgfa
xpfb knzgfsi thmsnbi ymjxn bevohy xpfb
hphcu fjodpdt mfsp jkvvp jvypar nlud lfv uftupcr nul dunl
olz ihyhw qntr lwcbohv qntr wzralwl
kfz pkjhidy msnmwz exox xexo uakipj mmznws zbbji ozispqb
gfi kwdhx qqo kdxwh fig
ehh rfozwr caoisw qntlk pkv zulc kpv hrqz
exmlrj aacc rzb qie rzb
mxyqe cuqz feyd meqyx gdvpu rqyjtvw dmoo vugdp emem
advj xmnad uvh ufnbi xmnad xmnad zzwjksx chbrjas hrbp ruvyg
nasrghk pmol ryko ofgakhd korf vpy nakrsgh
mylyqg aeizp rnk krlwchk aaqg
edxursp sosyv zesgnpx zlo sly alurdc ypmez qib aqtt lmxd
ihm hwzhd jhiw raocjk nlxce yzuzu nhudri tvygl tmclg mdkz
psubdis qrmxebg kdac xvl raxwfx vlx sxme
tci tphdy tggam vqqiyjz sgfvdri sxhztz fhsmxx yaj ncxcxq tic
xkljs cuhrm fdjqwd fuzyzh dzuzgjd lzpye lzpey
jriwl ypkcxd fxrg eit okzzzsc yaykarm qzuv jurgek dzfbbfl
workf rrw absfl gxluw qprdsz absfl qwqbmi amepvz oiqmy workf
dxyyb brnerbx lykd oqmz ursl zqom
cqtuzva aih uhaswd auhwds ktyvc hufogcg
jre fhlgrse svedc prfspaj ghm qcjzfc nsd
fow xyo vlvg sgg jgzvff rjxh eovre xtupnz
pekj pgiecc igxd zbiqoob ovv
xofxmz rdzdiq yruoqkh arfunx yruoqkh ucm bxov
ctogwj lpv ivtoxkf faj ctogwj xfzluad ctogwj vvw
rmc vjxj strgo tykifpp
ulivozu bczond ywnmt shakc yknr psr
bfx alwedh jfomlf pzj tely alwedh vccsoer rgwftcl vccsoer
frkwbv uudwt qsfg onuhiml jrd usu
bgdx deybefo gdj dgbx luu cbuwawd wqqtq dqmwy gin mhtfgy
ohjp ykemg nrs leayrh brtipx jhop phoj
utaep ywsy utaep ywsy
qow dxagjwb qbki bqik
larkpq bdgw mly vvwgv
juar zaerof qekpe hhgd eygru epekq dhgh
xpblz xksc lzue xksc yid nnve trlndn gjczngs cifqoaf
fpv ekz eknldf uqjgeu awwnwxu eknldf eknldf txhxv
mzvk wqtbda ovdbh vnes uiuuc uicuu bpwwtm aaat cygej nio gnl
rkdkzp bjaxqif xuwx bjaxqif hgtz slkqw rkdkzp ztp xfvgk ycvg
zpwr wvxzfcd opgcrfc ytxeboe rcqa ehrga lmgm
brsdnk nqgkjab nbjkaqg gho zqe
szbysu oqrtbp wjpuv oqrtbp oqrtbp gjmqq
uoyi ctscw uoyi ggn ija
fop lxa cgwpw lyvrxbe tit fop fop kfigqnu
ldqmk rxo ajhrbc ahrcjb xqdk kdxq
ith vdrl kvaxktm grkzmon ith ywbz kmnoiz
zdoo omjo fbz dveiipw fbz
ivj mcnu tkijlq xkq lrkyit cumn sfkrk numc ezxeeoi
lcwzdi sbsdgdy olvc olvc bimubzf bimubzf
cdjd umhwh djdc cddj oxheq veazlm
gxszn zsgxn azy yaz
byvmj mjybv jvxkuy akas uxyjvk
whmkttq whgzm gwmzh pkvtljw zgmhw jasudeq
yyjri fxsj xffmna vbal ftff rwq uszym bznil rfuctp ejndv wqr
gnwzjbw dezfvq gzkhzkl ivrdvxx wfah xvivrxd qzdvfe
xnfo zqzn iaod zlcclsd onxf lpskrfk nzqz kqzr kffpwak eky
muc tafbzp nra gvzc xiu gvzc
gfnbnyj nyjbfgn eoosw yjzf
qwwls sqwwl mxph swwql
twor uzjftq twro orwt
qomjuob bqaim zvfqww cvqzm wwipc zsywb bsqkp aoj fus
nlyd gtbgox tajlzgs bgtgxo pqt
pjtmgz ulblj ussh gngagba hhtexq bjbj obe xctciay osriw obe shxri
agc ejjdtak jgq moj agc iua syhxih znavmrc iih qubj
zxwzwhm lipkqhz bbv birxsj gzg iefrjh mprsfs ofpltbl gbo srpmsf hirm
rbpgqoe kymrf uzsut gkbtd xctpg qul hirtfl
wfvg pnqhuv jayjm ftqt mbrotl aydmoc lfwlxk vpvcsi svbn bnsv
jxjxza ysl kls vmt fvgunx hketl oshgie
dfeyxv akx qagwayp qrs lnulrle rqs gbvd bvdg
aac ndptml oke edwrg aac xechxz
mpx yrb oervzb ydvkw avlt oervzb bxdqbo hzwls
dsynfk dsynfk epexzjd epexzjd zofb
vhe zxfolqk lkh fxt flzkxqo lztwkmo khl
izlthi wtokkuz ousbpxp pvr uuxueq lvbeff mfk syjq fwgnfmg yytqesm gdd
kjcg slt khz atzw twpspdx kgyk wgq hjat ntf xvhxol msvdjs
ymm arrggw mmmbvrs ist arrggw nbvvc cwyacp
kuzglex iemp iemp jsko iemp oqs dheqypr
tzztq dsxqbow qgaeo kqn dsxqbow qqzpv
ysr fctpiyn psgb gatavv zsfxoxq nynfoh qaimoj zotjk nxug syr
xvm qvr hdxyhpf cbo xmv lfv wltyjlx
hjq pohc xgqit tducggu zdqmnc xqgit tqxgi srfyzu vdikqx
msiqte ewvp bzrv cmuy gse qqayvb bzrv qehy
watdvu ametrc etlduhh vcc luehdth udavtw
jktj mkq jktj mkq
uekth ufjkmdi qzhge wzwcwk nvrodcc vrcdocn bhcvd
xumywk zwofh kuxmyw acgzsjj hfowz njnz bnklyi
hmm fexu fexu hmm
zeuoarc yoa ggff jazzd mjein yhj qwo qwo
rolkwf fcyat lwm wqqm juwkt wqqm udj tex xgps nyy pdbkkhb
gld ksl gld bnsuhqc gld rwmybj
tvyxk xgmk cri pef epf unsl yktxv
muiql ejq taetjkf ejq xzmo wmv qbtmrh hkfbch taetjkf sut
pqg icvv gpq tufd iixd duft
zekx ybbb gzml vrbwcl opfb fkrv tto cbipr
moh stkkf ynrtdf jlgb kstfk ksktf
nvysvf mdtdoq bqqvr bqqvr
dqyz mzoqtp gzhdgd symsq iwh bpwox
pkqi jgzsrah yfjxx kdp xjaf lbj gkpixnj tyvzzso qmjbo skg nlchzbk
culxfx jarwu eiwriu vwvg gvwv sgnasz
kyfsn dwc sbnoe xwpgjh nbmvec dwc qjdh mpw gefimue fvqjwt kkor
hcdcgxs fof flc hfpjy lii fihcao pxg xywei jwsq yxr
oxrcv pda oxrcv gdvojsz kmlga mixlmp hdcabsn qvoa fwt
poe joylchz humrjy cyxbqfm lyk ybrfmp qmtpqyk vtpr lyk vtpr
ffswqs yxbuj tfzkmc yxbuj giog ckubbfy rtigw rtigw rpitxd
kcvrn eejyftw ejytfew rnckv
lvk lkv cooumh vlk
loypv ukowl loypv nyoyfl vehnm uff
tst sei zovy itdwibj mcbtst wcf rzp xvbtax ffzp xieenuy aegkj
zkhi hvsbgza xbwtdns wypfngy lvabd pybhcd crczm buikdpo vqgon pynfwyg phbcdy
ihy irxrj entmc yxfhbta xsdv xsdv
ezrcv kfgm pjneez puccy gzpxdlf gkfm yucpc mli xezfug
umjppkq idkiri wmnbhi unl nteyw wmnbhi zyv idkiri shhcrau
dzj zveqwae ljnikvb baavr dhsohp zveqwae goq zveqwae
xhc xch bmttdr snd jakd
jmgnvda bdpzfw dfwpzb pimpv blqtbyo lzdzo bgrlfy anmjvdg
lwvu ksg gqbtibd ksg lwvu ohfzlt foajo apyrcwj uaro
vel qksrwp zei ipnvd hdua rkspqw bujf
iozkiu upa knmcug zidypn yswb zswkvx naqsu
tjktoe dqpt pbqi dqpt
lcl tui uoizm xrdpmwi fbsuuqq tgeac hpajm tegac nczlic
ntmm mskzb arem ntmm jayzfe wyurgsh eqwcqt edhska asxhjv jayzfe
jyq juifidx fokzxh cgo xofhzk nhro xyccuq ioa nwk nqaxpfw
cvag bpk cuo ocu buehhq tartafi ifs qwh cveurg
bwut xpfni qzg cmp cid jftawv twiszmo
zgxc sui kypkd vpam ymxicrw jcfbutd fgx jcfbutd
tkxn rjqzljh tkxn mdwcho
qbv zneocv zneocv zneocv
tywf soncr lyepx qzj xdsr pdqv swt
ulu rdk iomqu dgouoba icax
ddsc oxilqpd ddsc atbekg ouzmxf oxilqpd kwtzz yhmyd otvi
vtj llnfrpc vfighju urosrsz vurtse llnfrpc qeuo vfighju nnn smsnp tfom
updfjmz ngtgi zaitq rqqhcyn ladzx zaitq fbaphyz hipe
rii fpos atl tal qhubqdv lat
whxzwdj yznkngr eefbmub wnxitd tnwxid zja ziewilm xylwn ihhsha lrptuyf
fhmzaxv mdn udl gyv pqw qlrz flm rqtji
bgn clnm cnml qyh hhf qqnur sgvigvm
qjtbysc ycbqjts gbgvlz vgzlgb dgxks qbvp grji dcc
wmduuq qayymzo zvh ylbipw sin ybwpli ilypwb
qsvzktt qsvzktt dasmg knh gcgep qai
jxukj qlgr cjssj aavqv
xpxa glsdfxq ngxwon ytuue pizqu
fxl vegoed tct luwm ulwm eeovdg
ntmpe auasx vkwgi cryuiix dmiufo fcb ldl jauncf gyouym asjcryc
lgwdcs eoxm hcrpnuf pcfnhru vlye fpurcnh uquukv vjc
lfns riwpdh phwxvew hhu jfptvv ofxd hkotgfq
qvuwnq wnpvs xdivrfz yaenqr fipwgl
vhcexfd bishqsc gsbruxm yzccyot yjloa aptg vbr gsbruxm ihqhyz yzccyot
knfst zhihi swhhq zhihi
qfto abhjx abhjx bpnijn ogmqxn rclqag dmeb rdogx emfriui hyvp ogmqxn
ivaemm wlsc dvjv aivemm xvf shfonv
vowhosr vptlu ucrut rdynh ttqvhg rdynh abtja pnvdy puxfmf dyhd
uvrenol ycuhvy ygm fjsxiwo oftstid ygm
fix qrqeg dfgvlun fix iraxgtt lhgqdo eqkgshd jwmrm qrsbzba
mxdj icjqzqw fvew gtvlhm mxdj
cyjtkm crb pmg jwo iluc brc ttnd
dasmgp ool ool opc
ubi pmz mtkh ibu hlx ipcvjki sydw zpm eewfdeu oga
avex yjaoghv yjaoghv lwwx
kwkdst iuokd nmpw onayet zlavwnd wwvbr jtrkyku wfxx dumydgh gnd zgi
ahyjnc rjakp bhabq tsmfi ahyjnc tsmfi yitqgi uwnywil shnkbn
krr sbbfjtm yvunas hwppsjf ntuuzw ngyvdmt ynk nfq mfrb pyw hngr
eeecesf phoo ijmx sjp kgmtg sjp wyz
qwixmou oximqwu ixu lsmf
dyrzq lbstdjv ldvowml qjf fqj zpabc dwmvoll jnq
pdtlu hgcfvz mnwjyq ymi cvcp kmx mkx ooffp uiwg opoff uevqt
hflomt fhlmto gutdbyp xyi zpggxc wqe
jpsr wwex yjgdj fqah wrmmw nyrnw hcomcgv teajmu emw zrraid
tvgsca bzgzkga ypsxsk dqz exmu tvgsca dqz qnd
arzn hojpi bznw ejuupe bznw hojpi
rids dule qaefaon sspit mtzgdls cfujw xldhimi igdoy dule
nefsys plea obksngc zxqee avsi obksngc vnsxdrl gspadob avsi owmzpeh tcj
oweq fkr krf rfk ztwjdry shzcmew jhna
hdjizhg dfclic usds luz mcwyj luz qvomls mren otax
pmzzfj pmzzfj wfxyq mqv hyp lhf
dxeaw ckkey ccvawo keaf izlh oacvcw lgcpgeh kdiky
xkwe xekw kwex tzfyx
dmmyt mtdnqw pdw vdav ofrtsk
klz zlk snxnihg snhigxn zkynpd
ijzce xobf uojezxi xiuojez
ztepv zvpet nije aditjlg natkkk dtitg jprgia
fesuh wadrhc bayf kktfaf nxvhq smbdaop gqx ioez fkjufb abyf
hej sta pztkcd pesabzz szp iada iada cdae hej sqst luf
xlnuhn oljaf fljao ascxez fojal
dprclb fzn wgauz rxewtp cjrlgz zfn
fidwoa mvoqy afian ntzokap mkplgy jfukgjv cyfsz
hbvqnnt giinuzq uezugy qooxjc zsxr rnihg ipbels
qroi wtltjq suj tqit bxtc jidzhpe nizp wtltjq nadcdm wwyhjrg
qtr fkbl bpptu baen awjpwsg vvqbxz animt uqbk zvbxvq
nznq fdiul jbv umyrf yufrm hrl duilf
bkvlfuw onkqzeo iwrg rifqzhj mgroul rnor qqqc sbfi hny zosfp kopxb
nvifbx jbowbj fnyskt jbowbj xvun xvun
piyl haajm stwzpp xvjg amjah
gye efwwwiv kyv zmtcgmi ifwvwew
dflx gdtb jyoj jyoj dflx aqhycgi xffnn
inc mpys mzqmcwx vryz ibqrzc pmsy fat rojpxwy rcbqzi gjef
DAY04;
    public const Day03 = '265149';
    public const Day02 = <<<DAY02
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
DAY02;
    public const Day01 = '516299281491169512719425276194596424291268712697155863651846937925928456958813624428156218468331423858422613471962165756423837756856519754524985759763747559711257977361228357678293572698839754444752898835313399815748562519958329927911861654784216355489319995566297499836295985943899373615223375271231128914745273184498915241488393761676799914385265459983923743146555465177886491979962465918888396664233693243983969412682561799628789569294374554575677368219724142536789649121758582991345537639888858113763738518511184439854223386868764189133964543721941169786274781775658991329331759679943342217578532643519615296424396487669451453728113114748217177826874953466435436129165295379157226345786756899935747336785161745487933721527239394118721517195849186676814232887413175587327214144876898248571248517121796766248817366614333915154796983612174281237846165129114988453188844745119798643314857871527757831265298846833327863781341559381238458322786192379487455671563757123534253463563421716138641611915686247343417126655317378639314168461345613427262786624689498485599942336813995725145169355942616672812792174556866436158375938988738721253664772584577384558696477546232189312287262439452141564522329987139692281984783513691857538335537553448919819545332125483128878925492334361562192621672993868479566688564752226111784486619789588318171745995253645886833872665447241245329935643883892447524286642296955354249478815116517315832179925494818748478164317669471654464867111924676961162162841232473474394739793968624974397916495667233337397241933765513777241916359166994384923869741468174653353541147616645393917694581811193977311981752554551499629219873391493426883886536219455848354426461562995284162323961773644581815633779762634745339565196798724847722781666948626231631632144371873154872575615636322965353254642186897127423352618879431499138418872356116624818733232445649188793318829748789349813295218673497291134164395739665667255443366383299669973689528188264386373591424149784473698487315316676637165317972648916116755224598519934598889627918883283534261513179931798591959489372165295';
}
