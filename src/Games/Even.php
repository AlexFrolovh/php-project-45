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
    $randomNumbers = [rand(0, 100), rand(0, 100), rand(0, 100)];
    $answer = '';
    
    engine($gameRules, $randomNumbers, $answer, 0);
}

function getRightAnswer($randomNumbers)
{
    $rightAnswer = isEven($randomNumbers[$index]) ? 'yes' : 'no';
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
