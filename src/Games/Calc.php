<?php

namespace Php\Project\Games\Calc;

use function Php\Project\Engine\runGame;

use const Php\Project\Engine\ROUNDS_COUNT;
const DESCRIPTION = 'What is the result of the expression?';

function calculate(int $number1, int $number2, string $operator)
{
    switch ($operator) {
        case "+":
            return $number1 + $number2;
        case "-":
            return $number1 - $number2;
        case "*":
            return $number1 * $number2;
    }
}

function runCalc()
{
    $gameData = [];

    for ($i = 0; $i < ROUNDS_COUNT; $i += 1) {
        $randNum1 = rand(1, 100);
        $randNum2 = rand(1, 100);
        $operators = ['+', '-', '*'];
        $randOperator = $operators[array_rand($operators)];
        $question = "{$randNum1} {$randOperator} {$randNum2}";
        $correctAnswer = calculate($randNum1, $randNum2, $randOperator);
        $gameData[] = [$question, $correctAnswer];
    }

    runGame(DESCRIPTION, $gameData);
}
