<?php

namespace BrainGames;

use function cli\line;
use function cli\prompt;
use function BrainGames\Games\isEven;

const ROUND_COUNT = 3;

function engine($gameRules, $answer, $question, $rightAnswer, $index)
{
  line('Welcome to the Brain Game!');
  $name = prompt('May I have your name?');
  line("Hello, %s!", $name);
  line($gameRules);

  for ($i = 0; $i < ROUND_COUNT; $i++) {
    line("Question: {$question}");
    $answer = prompt('Your answer');
    $index++;
    if ($answer === $rightAnswer) {
      line("Correct!");
    } else {
      line("\"{$answer}\" is wrong answer ;(. Correct answer was \"{$rightAnswer}\".");
      line("Let's try again, {$name}!");
      return;
    }
  }
  line("Congratulations, {$name}!");
  return;
}
