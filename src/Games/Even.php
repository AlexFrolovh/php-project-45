<?php

namespace BrainGames\Games;

use function BrainGames\engine;

function isEven($number)
{
    return ($number % 2 === 0);
}

function runGameEven()
{
    $gameRules = "Answer \"yes\" if the number is even, otherwise answer \"no\".";
    $number = rand(0, 100);
    $question = $number;
    $rightAnswer = isEven($question) ? 'yes' : 'no';
    
    engine($gameRules, $question, $rightAnswer);
}
