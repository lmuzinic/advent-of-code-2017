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

## Day 3
First thought after reading puzzle text was "This escalated rather quickly".
Realised that lower right corners are always `pow($squareBase, 2);` and then it was just a matter of growing numbers until I reach square where my memory location is.
The number of those squares equals half of my Manhattan distance and other half is distance of that memory location to middle side element.

As much as I've simplified the first part, that did not help me at all when numbers are non linear. Tried for ages to figure out how they grow and to shove them into one dimensional array somehow.
Ended up with building a 2D plane walker and simulating movement, turns and counting adjacent.

All in all, fun, but left me somewhat scared of Day 4.

## Day 4
I used a cool trick here with `array_flip` - by switching values to keys, non-unique ones will disappear.

For the second part, I took a really bad route. Really bad. Generating all the permutations was not needed. It was enough
just to sort letters in each word and then do the same trick from first puzzle.

## Day 5
This was relatively easy, glad to be doing it in a language that supports directly addressing each element.
