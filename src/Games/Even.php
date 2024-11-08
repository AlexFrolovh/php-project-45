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
    $randomNumbers = [rand(0, 100)];
    
    engine($gameRules, $randomNumbers);
}

function getRightAnswer($randomNumbers)
{
    foreach ($randomNumbers as $num) {
    $rightAnswer = isEven($num) ? 'yes' : 'no';
    return $rightAnswer;
  }
}
