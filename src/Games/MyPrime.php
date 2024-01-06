<?php

namespace BrainGames\Cli;
function GamePrime()
{
    $name = run();
    isPrime($name);
}
function isPrime(string $name)
{

    $answers = [];
    $randArray = [];
    $questions = [];

    for ($i = 0; $i < 3; $i++) {
        $randArray[] = rand(1, 100);
    }

    foreach ($randArray as $number) {
        $questions[] = $number;

        $flag = simplicity($number);

        if ($flag == true) {
            $answers[] = 'yes';
        } else {
            $answers[] = 'no';
        }
    }
    $finalAssocArray = array_combine($questions, $answers);

    $task = 'Answer "yes" if given number is prime. Otherwise answer "no".';

    communication($finalAssocArray, $name, $task);

}

function simplicity(int $number)
{
    for ($i = 2; $i < $number; $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}
