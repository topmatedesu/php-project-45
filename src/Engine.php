<?php

namespace Php\Project\Engine;

use function cli\line;
use function cli\prompt;

function game(string $task, array $result)
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line($task);

    foreach ($result as $key => $value) {
        $answer = prompt("Question: $key\nYour answer");
        if ($answer != $value) {
            line("'$answer' is wrong answer ;(. Correct answer was '$value'.");
            line("Let's try again, %s!", $name);
            return;
        } else {
            line("Correct!");
        }
    }

    line("Congratulations, %s!", $name);
}
