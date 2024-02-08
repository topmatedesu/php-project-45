<?php

namespace Php\Project\Games\Gcd;

use function Php\Project\Engine\runGame;

use const Php\Project\Engine\ROUNDS_COUNT;
const DESCRIPTION = 'Find the greatest common divisor of given numbers.';

function runGcd()
{
    $gameData = [];
    $question = [];
    $correctAnswer = [];

    for ($i = 0; $i < ROUNDS_COUNT; $i += 1) {
        $randNum1 = rand(1, 100);
        $randNum2 = rand(1, 100);
        $question = "{$randNum1} {$randNum2}";

        while ($randNum1 != $randNum2) {
            if ($randNum1 > $randNum2) {
                $randNum1 = $randNum1 - $randNum2;
            } else {
                $randNum2 = $randNum2 - $randNum1;
            }
        }

        $correctAnswer = $randNum2;
        $gameData[] = [$question, $correctAnswer];
    }

    runGame(DESCRIPTION, $gameData);
}
