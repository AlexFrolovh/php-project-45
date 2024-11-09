<?php

namespace BrainGames\Games;

use function BrainGames\engine;

function isEven($number)
{
    return ($number % 2 === 0) ? 'yes' : 'no';
}

function runGameEven()
{
    $gameRules = "Answer \"yes\" if the number is even, otherwise answer \"no\".";
    $randomNumbers = [rand(0, 100), rand(0, 100), rand(0, 100)];
    $answer = '';
    $question = $randomNumbers[0 + $i];
    $rightAnswer = isEven($question);
    
    engine($gameRules, $answer, $question, $rightAnswer);
}

function invert($answer)
{
  if ($answer === 'yes') {
    return $answer = 'no';
  } else {
    return $answer = 'yes';
  }
}
