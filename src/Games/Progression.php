<?php

namespace Php\Project\Games\Progression;

use function Php\Project\Engine\game;

function progression()
{
    $task = 'What number is missing in the progression?';
    $result = [];
    $progression = [];
    $numbers = [];
    $answer = [];

    for ($i = 0; $i < 3; $i++) {
        $start = rand(0, 3);
        $end = rand(20, 50);
        $step = rand(2, 5);

        $progression = range($start, $end, $step);
        $randNum = array_rand($progression);
        $answer[] = $progression[$randNum];
        $progression[$randNum] = '..';
        $numbers[$i] = implode(' ', $progression);
    }

    $result = array_combine($numbers, $answer);
    game($task, $result);
}
