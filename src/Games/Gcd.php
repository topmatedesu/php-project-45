<?php

namespace Php\Project\Games\Gcd;

use function Php\Project\Engine\runGame;

use const Php\Project\Engine\ROUNDS_COUNT;

const DESCRIPTION = 'Find the greatest common divisor of given numbers.';

function getGcd(int $number1, int $number2)
{
    $result = 1;

    for ($i = 1; $i < ($number1 + 1); $i += 1) {
        if ($number1 % $i === 0 && $number2 % $i === 0) {
            $result = $i;
        }
    }

    return $result;
}

function runGcd()
{
    $gameData = [];

    for ($i = 0; $i < ROUNDS_COUNT; $i += 1) {
        $randNum1 = rand(2, 50);
        $randNum2 = rand(10, 100);
        $question = "{$randNum1} {$randNum2}";
        $correctAnswer = getGcd($randNum1, $randNum2);
        $gameData[] = [$question, (string) $correctAnswer];
    }

    runGame(DESCRIPTION, $gameData);
}
