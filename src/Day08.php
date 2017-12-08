<?php
declare(strict_types=1);


namespace AdventOfCode\Year2017;


use AdventOfCode\Bootstrap\Day;

class Day08 implements Day
{
    private $registers = [];

    public function firstPuzzle(string $input)
    {
        $instructions = explode("\n", $input);

        foreach ($instructions as $instruction) {
            $instruction = $this->prepareInstruction($instruction);

            $this->setRegisters($instruction);

            if ($this->evaluateInstruction($instruction)) {
                if ($instruction['operation'] === 'inc') {
                    $this->registers[$instruction['register']] += $instruction['amount'];
                } else {
                    $this->registers[$instruction['register']] -= $instruction['amount'];
                }
            }
        }

        return max($this->registers);
    }

    public function secondPuzzle(string $input)
    {
        $instructions = explode("\n", $input);

        $maxEver = 0;
        foreach ($instructions as $instruction) {
            $instruction = $this->prepareInstruction($instruction);

            $this->setRegisters($instruction);

            if ($this->evaluateInstruction($instruction)) {
                if ($instruction['operation'] === 'inc') {
                    $this->registers[$instruction['register']] += $instruction['amount'];
                } else {
                    $this->registers[$instruction['register']] -= $instruction['amount'];
                }
            }

            if (max($this->registers) > $maxEver) {
                $maxEver = max($this->registers);
            }
        }

        return $maxEver;
    }

    private function prepareInstruction(string $instruction)
    {
        $instruction = explode(" ", $instruction);
        unset($instruction[3]);

        return array_combine(
            [
                "register",
                "operation",
                "amount",
                "left_operand",
                "condition",
                "right_operand"
            ], $instruction
        );
    }

    private function evaluateInstruction(array $instruction)
    {
        switch ($instruction['condition']) {
            case '>':
                return $this->registers[$instruction['left_operand']] > $instruction['right_operand'];
            case '<':
                return $this->registers[$instruction['left_operand']] < $instruction['right_operand'];
            case '>=':
                return $this->registers[$instruction['left_operand']] >= $instruction['right_operand'];
            case '<=':
                return $this->registers[$instruction['left_operand']] <= $instruction['right_operand'];
            case '==':
                return $this->registers[$instruction['left_operand']] == $instruction['right_operand'];
            case '!=':
                return $this->registers[$instruction['left_operand']] != $instruction['right_operand'];
        }
    }

    private function setRegisters(array $instruction)
    {
        if (!isset($this->registers[$instruction['register']])) {
            $this->registers[$instruction['register']] = 0;
        }

        if (!isset($this->registers[$instruction['left_operand']])) {
            $this->registers[$instruction['left_operand']] = 0;
        }
    }
}
