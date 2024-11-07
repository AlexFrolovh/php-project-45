<?php

namespace BrainGames\Games\Even;

use function cli\line;
use function cli\prompt;

const ROUND_COUNT = 3;

function isEven($number)
{
    return $number % 2 === 0;
}

function runGameEven()
{

  line('Welcome to the Brain Game!');
  $name = prompt('May I have your name?');
  line("Hello, %s!", $name);

  line("Answer \"yes\" if the number is even, otherwise answer \"no\".");

  for ($i = 0; $i < ROUND_COUNT; $i++) {
    $randomNumber = rand(0, 100);
    $rightAnswer = isEven($randomNumber)? 'yes' : 'no';

    line("Question: {$randomNumber}");
    $answer = prompt('Your answer');
    if ($rightAnswer === $answer) {
      line("Correct!");
    } else {
      line("\"{$answer}\" is wrong answer ;(. Correct answer was \"{$rightAnswer}\".");
      line("Let's try again, {$name}!");
      return;
    }
  }
  line("Congratulations, {$name}!");
}
