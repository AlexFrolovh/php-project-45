<?php

namespace BrainGames\Games;

use function BrainGames\engine;

function isEven($number)
{
    return ($number % 2 === 0) ? 'yes' : 'no';
}

function runGameEven()
{
    $gameRules = "Answer \"yes\" if the number is even, otherwise answer \"no\".";
    $randomNumbers = [rand(0, 100), rand(0, 100), rand(0, 100)];
    $answer = '';
    $index = 0;
    $question = $randomNumbers[index + $index];
    $rightAnswer = isEven($question);
    
    engine($gameRules, $answer, $question, $rightAnswer, $index);
}
