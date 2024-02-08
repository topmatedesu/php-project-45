<?php

namespace Php\Project\Games\Prime;

use function Php\Project\Engine\runGame;

use const Php\Project\Engine\ROUNDS_COUNT;
const DESCRIPTION = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function isPrime(int $number)
{
    for ($i = 2; $i < $number; $i += 1) {
        if ($number % $i === 0) {
            return false;
        }
    }

    return true;
}

function runPrime()
{
    $gameData = [];
    
    for ($i = 0; $i < ROUNDS_COUNT; $i += 1) {
        $randomNumber = rand(2, 50);
        $question = $randomNumber;
        $correctAnswer = isPrime($randomNumber) ? 'yes' : 'no';
        $gameData[] = [$question, $correctAnswer];
    }

    runGame(DESCRIPTION, $gameData);
}
