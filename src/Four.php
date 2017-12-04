<?php
declare(strict_types=1);


namespace AdventOfCode\Year2017;


use AdventOfCode\Bootstrap\Day;

class Four implements Day
{
    public function firstPuzzle(string $input)
    {
        $passPhrases = explode("\n", $input);

        $numValidPassPhrases = 0;
        foreach ($passPhrases as $passPhrase) {
            if ($this->validPassPhrase($passPhrase)) {
                $numValidPassPhrases += 1;
            }
        }

        return $numValidPassPhrases;
    }

    public function validPassPhrase(string $input)
    {
        $words = explode(" ", $input);

        $keyWords = array_flip($words);

        if (count($words) === count($keyWords)) {
            return true;
        }

        return false;
    }

    public function secondPuzzle(string $input)
    {
        $passPhrases = explode("\n", $input);

        $numValidPassPhrases = 0;
        foreach ($passPhrases as $passPhrase) {
            if ($this->validPassPhrase($passPhrase) && $this->extraValidPassPhrase($passPhrase)) {
                $numValidPassPhrases += 1;
            }
        }

        return $numValidPassPhrases;
    }

    function permute($items, $perms = []) {
        if (empty($items)) {
            $this->permutations[implode('', $perms)] = true;
        } else {
            for ($i = count($items) - 1; $i >= 0; --$i) {
                $newitems = $items;
                $newperms = $perms;
                list($foo) = array_splice($newitems, $i, 1);
                array_unshift($newperms, $foo);
                $this->permute($newitems, $newperms);
            }
        }
    }

    public function extraValidPassPhrase(string $input)
    {
        $words = explode(" ", $input);

        $numWords = count($words);

        for ($i = 0; $i < $numWords; $i += 1) {
            $this->permutations = [];
            $this->permute(str_split($words[$i]));
            unset($this->permutations[$words[$i]]);

            foreach ($words as $word) {
                if (array_key_exists($word, $this->permutations)) {
                    return false;
                }
            }
        }

        return true;
    }
}
