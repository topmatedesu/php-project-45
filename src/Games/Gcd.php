<?php

namespace Php\Project\Games\Gcd;

use function Php\Project\Engine\game;

function gcd()
{
    $task = 'Find the greatest common divisor of given numbers.';
    $result = [];
    $numbers = [];
    $answer = [];

    for ($i = 0; $i < 3; $i++) {
        $num1 = rand(1, 100);
        $num2 = rand(1, 100);
        $numbers[$i] = "$num1 $num2";

        while ($num1 != $num2) {
            if ($num1 > $num2) {
                $num1 = $num1 - $num2;
            } else {
                $num2 = $num2 - $num1;
            }
        }

        $answer[$i] = $num2;
    }

    $result = array_combine($numbers, $answer);
    game($task, $result);
}
