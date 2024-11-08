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
    $randomNumber = [rand(0, 100), rand(0, 100), rand(0, 100)];
    $i = 0;
    $rightAnswer = isEven($randomNumber[$i])? 'yes' : 'no';
    
    engine($gameRules, $randomNumber, $rightAnswer, $i);
}
