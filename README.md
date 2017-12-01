## About
[Advent of Code 2017](https://adventofcode.com/2017) in PHP

## Notes
Decided to write down some notes, journal style, more of random brain dump to explain process of getting a puzzle solution.

### Day 1
Initially first puzzle did not use `($position + 1) % $inputLength`, that came to me after solving second one.
First iteration checked first and last element after the loop.

Wanted to be lazy for second one and just concatenate two inputs together. 
Length of input always being an even number tipped me into using modulo.  

After discussion with my dear friends, learned that PHP supports negative integers as character positions.
In that case, checking can even easier `$input[$position] === $input[$position - 1]` and `$input[$position] === $input[$position - $middlePosition]`  

## Friends
List of friends doing Advent of Code 2017

- [Ivan Habunek](https://twitter.com/ihabunek), [closure](https://github.com/ihabunek/aoc2017)
- Maja, python
- [Robert Basic](https://twitter.com/robertbasic), [go](https://github.com/robertbasic/aoc2017/)
