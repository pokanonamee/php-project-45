<?php

namespace BrainGames\Cli;

function prime()
{
    $name = run();
    $questionsAndAnswers = isPrime();
    $task = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    communication($questionsAndAnswers, $name, $task);
}

function isPrime()
{
    $questionsAndAnswers = [];

    for ($i = 0; $i < 3; $i++) {
        $number = rand(1, 100);
        $questionsAndAnswers[$number] = isPrimeNumber($number) ? 'yes' : 'no';
    }
    return $questionsAndAnswers;
}

function isPrimeNumber(int $number): bool
{
    if ($number < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }
    return true;
}
