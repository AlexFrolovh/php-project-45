<?php

namespace BrainGames\Games;

use function BrainGames\engine;

function isEven($number)
{
    return $number % 2 === 0;
}

function runGameEven()
{
    $gameRules = "Answer \"yes\" if the number is even, otherwise answer \"no\".";
    $num = rand(0, 100);
    $randomNumber = $num;
    $rightAnswer = isEven($randomNumber)? 'yes' : 'no';
    
    engine($gameRules, $randomNumber, $rightAnswer);
}
