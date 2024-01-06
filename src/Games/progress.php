<?php


namespace BrainGames\Cli;

function progressions()
{
    $name = run();
    progression($name);
}

function progression(string $name)
{

    $questions = [];
    $answers = [];


    for ($i = 0; $i < 3; $i++) {
        $start = rand(0, 3);
        $end = rand(20, 50);
        $step = rand(2, 5);

        $progression = range($start, $end, $step);
        $randKey = array_rand($progression);
        $answers[] = $progression[$randKey];
        $progression[$randKey] = '..';
        $questions[$i] = implode(' ', $progression);
    }
    $finalAssocArray = array_combine($questions, $answers);

    $task = 'What number is missing in the progression?';

    communication($finalAssocArray, $name, $task);
}