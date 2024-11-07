<?php

namespace BrainGames\Games\Even;

use function BrainGames\src\Engine;

function isEven($number)
{
    return $number % 2 === 0;
}

function runGameEven()
{
    //$gameRules = "Answer \"yes\" if the number is even, otherwise answer \"no\".";
    //$randomNumber = rand(0, 100);
    //$rightAnswer = isEven($randomNumber)? 'yes' : 'no';
    
    engine($gameRules="Answer \"yes\" if the number is even, otherwise answer \"no\".", $randomNumber=rand(0, 100), $rightAnswer=isEven($randomNumber)? 'yes' : 'no');
}
