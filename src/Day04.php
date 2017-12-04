<?php
declare(strict_types=1);


namespace AdventOfCode\Year2017;


use AdventOfCode\Bootstrap\Day;

class Day04 implements Day
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

    public function extraValidPassPhrase(string $input)
    {
        $originalWords = explode(" ", $input);

        $sortedWords = $originalWords;
        array_walk($sortedWords, function (&$word) {
            $word = str_split($word);
            asort($word);
            $word = implode("", $word);
        });

        $sortedKeyWords = array_flip($sortedWords);

        if (count($originalWords) === count($sortedKeyWords)) {
            return true;
        }

        return false;
    }
}
