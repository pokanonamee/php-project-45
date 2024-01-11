<?php

namespace BrainGames\Cli;

function even()
{
    $name = run();
    $questionsAndAnswers = isEven();
    $task = 'Answer "yes" if the number is even, otherwise answer "no".';
    communication($questionsAndAnswers, $name, $task);
}

function isEven()
{
    $questionsAndAnswers = [];

    for ($i = 0; $i < 3; $i++) {
        $number = rand(1, 100);
        if ($number % 2 == 0) {
            $questionsAndAnswers[$number] = 'yes';
        } else {
            $questionsAndAnswers[$number] = 'no';
        }
    }
return $questionsAndAnswers;
}
