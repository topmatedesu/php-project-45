<?php

namespace Php\Project\Games\Progression;

use function Php\Project\Engine\runGame;

use const Php\Project\Engine\ROUNDS_COUNT;
const DESCRIPTION = 'What number is missing in the progression?';

function runProgression()
{
    $gameData = [];
    $progression = [];
    $question = [];
    $correctAnswer = [];

    for ($i = 0; $i < ROUNDS_COUNT; $i += 1) {
        $start = rand(0, 3);
        $end = rand(20, 50);
        $step = rand(2, 5);

        $progression = range($start, $end, $step);
        $randNum = array_rand($progression);
        $correctAnswer = $progression[$randNum];
        $progression[$randNum] = '..';
        $question = implode(' ', $progression);
        $gameData[] = [$question, $correctAnswer];
    }

    runGame(DESCRIPTION, $gameData);
}
