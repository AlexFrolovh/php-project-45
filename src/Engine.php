<?php

namespace BrainGames;

use function cli\line;
use function cli\prompt;
use function BrainGames\Games\getRightAnswer;
use function BrainGames\Games\invert;

const ROUND_COUNT = 3;

function engine($gameRules, $randomNumbers, $answer)
{
  line('Welcome to the Brain Game!');
  $name = prompt('May I have your name?');
  line("Hello, %s!", $name);
  line($gameRules);

  for ($i = 0; $i < ROUND_COUNT; $i++) {
    line("Question: {$randomNumbers[0 + $i]}");
    $answer = prompt('Your answer');
    if (getRightAnswer($randomNumbers) === $answer) {
      line("Correct!");
    } else {
      line("\"{$answer}\" is wrong answer ;(. Correct answer was " . '"' . invert($answer) . '".' );
      line("Let's try again, {$name}!");
      return;
    }
  }
  line("Congratulations, {$name}!");
  return;
}
