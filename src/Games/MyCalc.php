<?php

namespace BrainGames\Cli;

function mycalc()
{
    $name = run();
    calc($name);
}

function calc(string $name)
{
    $finalAssocArray = [];

    for ($i = 0; $i < 3; $i++) {
        $first = rand(1, 100);
        $second =  rand(1, 100);
        switch (mt_rand(1, 3)) {
            case 1:
                $finalAssocArray["$first - $second"] = $first - $second;
                break;
            case 2:
                $finalAssocArray["$first + $second"] = $first + $second;
                break;
            case 3:
                $finalAssocArray["$first * $second"] = $first * $second;
                break;
        }
    }

    $task = 'What is the result of the expression?';

    communication($finalAssocArray, $name, $task);
}
