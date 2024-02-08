<?php

namespace Php\Project\Games\Progression;

use function Php\Project\Engine\runGame;

use const Php\Project\Engine\ROUNDS_COUNT;

const DESCRIPTION = 'What number is missing in the progression?';

function createProgression()
{
    $progression = [];
    $maxElementsCount = 10;
    $start = rand(1, 100);
    $step = rand(1, 10);

    for ($i = $start; count($progression) < $maxElementsCount; $i += 1) {
        $i += $step;
        $progression[] = $i;
    }

    return $progression;
}

function runProgression()
{
    $gameData = [];

    for ($i = 0; $i < ROUNDS_COUNT; $i += 1) {
        $progression = createProgression();
        $randNum = array_rand($progression);
        $correctAnswer = $progression[$randNum];
        $progression[$randNum] = '..';
        $question = implode(' ', $progression);
        $gameData[] = [$question, $correctAnswer];
    }

    runGame(DESCRIPTION, $gameData);
}
