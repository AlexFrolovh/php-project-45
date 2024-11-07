<?php

namespace BrainGames;

use function cli\line;
use function cli\prompt;

const ROUND_COUNT = 3;

function engine()
{
  line('Welcome to the Brain Game!');
  $name = prompt('May I have your name?');
  line("Hello, %s!", $name);
  line($gameRules);

  for ($i = 0; $i < ROUND_COUNT; $i++) {
    line("Question: {$randomNumber}");
    $answer = prompt('Your answer:');
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
