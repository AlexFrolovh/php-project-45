<?php

namespace BrainGames\Games\Even;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine;

const ROUND_COUNT = 3;

function isEven($number)
{
    return $number % 2 === 0;
}

function runGameEven()
{
  $gameRules = "Answer \"yes\" if the number is even, otherwise answer \"no\".";
  //$randomNumber = rand(0, 100);
  $rightAnswer = isEven($randomNumber)? 'yes' : 'no';
    
  engine($gameRules, $rightAnswer, $randomNumber);
}
