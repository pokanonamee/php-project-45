<?php

namespace BrainGames\Cli;

use function BrainGames\Cli\run;

function divisor()
{
    $name = run();
    $questionsAndAnswers = gcd();
    $task = 'Find the greatest common divisor of given numbers.';
    communication($questionsAndAnswers, $name, $task);
}

function gcd()
{
    $questions = [];
    $answers = [];

    for ($i = 0; $i < 3; $i++) {
        $first = rand(1, 100);
        $second = rand(1, 100);

        $questions[$i] = "$first $second";

        while ($first != $second) {
            if ($first > $second) {
                $first =  $first - $second;
            } else {
                $second = $second - $first;
            }
        }
        $answers[$i] = $second;
    }
    return array_combine($questions, $answers);
}
