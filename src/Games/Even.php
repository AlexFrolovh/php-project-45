<?php

namespace BrainGames\Games;

use function BrainGames\Engine\engine;

function isEven($number)
{
    return $number % 2 === 0;
}

function runGameEven()
{
    $gameRules = "Answer \"yes\" if the number is even, otherwise answer \"no\".";
    $randomNumber = rand(0, 100);
    $rightAnswer = isEven($randomNumber)? 'yes' : 'no';
    
    engine($gameRules, $randomNumber, $rightAnswer);
}
