<?php

namespace BrainGames\Cli;

function sum()
{
    $name = run();
    $questionsAndAnswers = calc();
    $task = 'What is the result of the expression?';
    communication($questionsAndAnswers, $name, $task);
}

function calc()
{
    $questionsAndAnswers = [];

    for ($i = 0; $i < 3; $i++) {
        $first = rand(1, 100);
        $second =  rand(1, 100);
        switch (mt_rand(1, 3)) {
            case 1:
                $questionsAndAnswers["$first - $second"] = $first - $second;
                break;
            case 2:
                $questionsAndAnswers["$first + $second"] = $first + $second;
                break;
            case 3:
                $questionsAndAnswers["$first * $second"] = $first * $second;
                break;
        }
    }
    return $questionsAndAnswers;
}
