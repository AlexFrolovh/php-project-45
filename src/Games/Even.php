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
    $question = rand(0, 100);
    $rightAnswer = isEven($number) ? 'yes' : 'no';
    
    engine($gameRules, $question, $rightAnswer);
}
