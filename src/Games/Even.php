<?php

namespace Php\Project\Games\Even;

use function Php\Project\Engine\runGame;

use const Php\Project\Engine\ROUNDS_COUNT;

const DESCRIPTION = 'Answer "yes" if the number is even, otherwise answer "no".';

function isEven(int $number)
{
    return ($number % 2) === 0;
}

function runEven()
{
    $gameData = [];

    for ($i = 0; $i < ROUNDS_COUNT; $i += 1) {
        $randomNumber = rand(1, 100);
        $correctAnswer = isEven($randomNumber) ? 'yes' : 'no';
        $gameData[] = [$randomNumber, (string) $correctAnswer];
    }

    runGame(DESCRIPTION, $gameData);
}
