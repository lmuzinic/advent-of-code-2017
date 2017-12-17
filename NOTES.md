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

## Day 6
Mentioning few gotchas for both puzzles as they are based on same code. Storing string representation of state and counting occurrences made loop condition much simpler.
Circular motion achieved by `$location = ++$location % $totalMemoryBanks`.

I did not think about possible collisions when picking `$seenState` keys. Thanks to discussion with Robert I got to add a case when it happens and update my code. 

## Day 7
Code structures are getting more complex as days go by. PHP doesn't have a tree data structure built in (even in SPL) so it was either using something off packagist or building one. 
I [opted for latter](src/Disc.php) as this is learning :). Also, as I did not want to traverse through the tree there is a `$discsMap` property so I can access them by name.

There is also a small singleton factory inside `getNode` method - retrieving Disc by name will either get one that was previously created or create new one and return it.   

As I rarely need to write regex, took some time to play with them as well. 

## Day 8
Few things that helped me. Creating a separate method for parsing input lines. Having a associative array is much more meaningful than indexed one.
Second thing was setting registers, so there is no need to worry about them later on. Last, but not least, built in `max` function.

## Day 9
When I read groups I immediately thought stacks. My initial solution for first puzzle also included stack for garbage as I thought it would be used in second part. Lesson learned here.

Also, my sample tests passed, but my final solution did not. Problem was in samples, each contains only one garbage group. That was fixed by adding `['<{o"i!a,<{i<a><{o"i!a,<{i<a>', 20],` to samples and then fixing code to decrement garbage count on each `>` as well.

## Day 10
Aaaah, so that's how hashes work. Never looked under the hood, let alone code one from scratch. Cool.
The trick with making array as circular structure from Day 1 proves to be a theme for me. Used it again. 

There was one requirement in second puzzle that said
> run a total of 64 rounds

and it got me thinking what would be the best way to write it - what would make it immediately clear?

First take was simple for loop.
````php
for ($i = 0; $i < 64; $i += 1) {
````
This is probably something that most are used to seeing, but some people find it confusing. Does it run 64 times, or 65? Is 64 included? You have to look at first expression and exact comparison operator in second one to really understand what is going on.

Second take was foreach loop with range.    
````php
foreach (range(1, 64) as $i) {
````
Slightly better at readability, although still not immediately clear how many times it will run and with `$i` being unused one could wander there is a bug in that code. Also, slight performance penalty for creating an array.

In the end, I've decided for while loop. 
````php
$repeat = 64;
while ($repeat--) {
````
There is just one value and it tells you what it does, no confusion about boundaries.  

## Day 11
Hexawhatnow? I decided it is time to google and first learn about hexagon grids. Few years back I read one blog that explained them perfectly so I looked it up. It says
>  I’ve been collecting hex grid resources for nearly 20 years
 
How hexy is that? [Check it out](https://www.redblobgames.com/grids/hexagons/).

Decided to go with cube coordinate system, as it makes moving logic much cleaner - no need to check where you are in order to know where to move (which is not the case with offset coordinates) and 
distance (or steps in our example) is just a max absolute value of axis (as our starting distance is [0, 0, 0]).

## Day 12
Slow. Slow. Slow. Produced extra slow code. Not proud, will revisit this one.

## Day 13
Another fun day. Got logic setup nicely, created Scanner object, ticks logic in place, tests on sample inputs are green and then it fails miserably on actual input.
How miserably? 

> Time: 36.74 minutes, Memory: 6.00MB

Thirtysix minutes miserably.

Dropped my nice logic, dropped Scanner object, removed ticks, started doing calculation for whole room/scanners including depth to minimize overhead as much as possible.
End result?

> Time: 28.4 seconds, Memory: 6.00MB

Tolerable. 

## Day 14
My knot hash function has a bug. Guess it was pure luck to get a correct solution for Day 10. Oh well, will revisit this one.

## Day 15
Haven't used coroutines in this year's Advent of Code, so here was my chance. It is very easy to go from generators (commonly used in `foreach`, being Iterators after all) to coroutines.
Think of them as a way to talk to generator - instead of just retrieving values from them you can also [send](http://php.net/manual/en/generator.send.php) values into generators.  

## Day 16
Again used the fact that PHP can handle strings as arrays, so doing the exchange was easy, doing the spin is just concatenating two pieces and partner is just search and exchange.

Big number of repeats was a slight giveaway into the fact that they must be repeating after some cycles. So I just recorded their end state, and after finding it, moved the counter to nth iteration before 1000000000.

Slightly disappointed that puzzle did not include final state (just second cycle) so I was not able to write a test for that first.
