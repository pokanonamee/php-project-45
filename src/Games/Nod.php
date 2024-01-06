<?php

namespace BrainGames\Cli;



function divisor()
{
    $name = run();
    gcd($name);
}

function gcd(string $name)
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
    $finalAssocArray = array_combine($questions, $answers);

    $task = 'Find the greatest common divisor of given numbers.';
    communication($finalAssocArray, $name, $task);
}