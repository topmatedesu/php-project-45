<?php

namespace Php\Project\Games\Calc;

use function Php\Project\Engine\game;

function calc()
{
    $task = 'What is the result of the expression?';
    $result = [];

    for ($i = 0; $i < 3; $i++) {
        $num1 = rand(1, 100);
        $num2 = rand(1, 100);
        switch (mt_rand(1, 3)) {
            case 1:
                $result["$num1 + $num2"] = $num1 + $num2;
                break;
            case 2:
                $result["$num1 - $num2"] = $num1 - $num2;
                break;
            case 3:
                $result["$num1 * $num2"] = $num1 * $num2;
                break;
        }
    }

    game($task, $result);
}
