<?php


namespace BrainGames\Cli;

use function cli\line;
use function cli\prompt;

function communication(array $questionsAndAnswers, string $task)
{
    line($task);

    foreach ($questionsAndAnswers as $question => $correctAnswer) {
        line("Question: {$question}");
        $userAnswer = prompt('Your answer');

        if ($userAnswer !== $correctAnswer) {
            line("'{$userAnswer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'.");
            line("Let's try again!");
            return;
        }

        line("Correct!");
    }

    line("Congratulations, you are the winner!");
}

//
//namespace BrainGames\Cli;
//
//use function cli\line;
//use function cli\prompt;
//
//function communication(array $finalAssocArray, string $name, string $task)
//{
//    line($task);
//    foreach ($finalAssocArray as $key => $value) {
//        $answer = prompt("Question: $key\nYour answer");
//        if ($answer != $value) {
//            line("'$answer' is wrong answer ;(. Correct answer was '$value'. \nLet's try again, $name!");
//            return;
//        } else {
//            line("Correct!");
//        }
//    }
//    line("Congratulations, $name!");
//}
