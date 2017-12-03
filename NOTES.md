# Notes
Decided to write down some notes, journal style, more of random brain dump to explain process of getting a puzzle solution.

## Day 1
Initially first puzzle did not use `($position + 1) % $inputLength`, that came to me after solving second one.
First iteration checked first and last element after the loop.

Wanted to be lazy for second one and just concatenate two inputs together. 
Length of input always being an even number tipped me into using modulo.  

After discussion with my dear friends, learned that PHP supports negative integers as character positions.
In that case, checking can even easier `$input[$position] === $input[$position - 1]` and `$input[$position] === $input[$position - $middlePosition]`  

## Day 2
Ugh, loop inside loop. Haven't seen those since high school. Anyways, moved it in the separate method to benefit from early return when divisible is found.
Starting second loop from next index position so to avoid checking item on itself.
