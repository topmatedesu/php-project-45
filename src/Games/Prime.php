<?php

namespace Php\Project\Games\Prime;

use function Php\Project\Engine\game;

function isPrime(int $number)
{
    for ($i = 2; $i < $number; $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }

    return true;
}

function prime()
{
    $task = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    $result = [];
    $randomNumbers = [];
    $givenNumbers = [];
    $answer = [];

    for ($i = 0; $i < 3; $i++) {
        $randomNumbers[] = rand(2, 50);
    }

    foreach ($randomNumbers as $number) {
        $givenNumbers[] = $number;

        if (isPrime($number) === true) {
            $answer[] = 'yes';
        } else {
            $answer[] = 'no';
        }
    }

    $result = array_combine($givenNumbers, $answer);
    game($task, $result);
}
