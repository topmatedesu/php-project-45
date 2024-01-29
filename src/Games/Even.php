<?php

namespace Php\Project\Games\Even;

use function Php\Project\Engine\game;

function even()
{
    $task = 'Answer "yes" if the number is even, otherwise answer "no".';
    $result = [];

    for ($i = 0; $i < 3; $i++) {
        $number = rand(1, 100);
        if ($number % 2 === 0) {
            $result[$number] = 'yes';
        } else {
            $result[$number] = 'no';
        }
    }

    game($task, $result);
}
