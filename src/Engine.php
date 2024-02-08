<?php

namespace Php\Project\Engine;

use function cli\line;
use function cli\prompt;

const ROUNDS_COUNT = 3;

function runGame(string $description, array $gameData)
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line($description);

    foreach ($gameData as [$question, $correctAnswer]) {
        line("Question: $question");
        $userAnswer = prompt("Your answer");
        if ($userAnswer != $correctAnswer) {
            line("'$userAnswer' is wrong answer ;(. Correct answer was '$correctAnswer'.");
            line("Let's try again, %s!", $name);
            return;
        } else {
            line("Correct!");
        }
    }

    line("Congratulations, %s!", $name);
}
