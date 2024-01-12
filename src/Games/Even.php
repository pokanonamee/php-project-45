<?php

namespace BrainGames\Games\Even;

use function BrainGames\Engine\playGame;

use const BrainGames\Engine\NUMBER_OF_ROUNDS;

const DESCRIPTION = 'Answer "yes" if the number is even, otherwise answer "no".';

function isEven(int $num): bool
{
    return $num % 2 === 0;
}

function runEven(): void
{
    $gameData = [];

    for ($i = 0; $i < NUMBER_OF_ROUNDS; $i += 1) {
        $num = rand(1, 99);
        $correctAnswer = isEven($num) ? 'yes' : 'no';

        $gameData[] = [$num, $correctAnswer];
    }

    playGame(DESCRIPTION, $gameData);
}
