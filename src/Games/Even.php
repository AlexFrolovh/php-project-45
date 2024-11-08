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
    $randomNumber = rand(0, 100);
    $answer = '';
    
    engine($gameRules, $randomNumber, $answer);
}

function getRightAnswer($randomNumber)
{
    $rightAnswer = isEven($randomNumber) ? 'yes' : 'no';
    return $rightAnswer;
}

function invert($answer)
{
  if ($answer === 'yes') {
    return $answer = 'no';
  } else {
    return $answer = 'yes';
  }
}
