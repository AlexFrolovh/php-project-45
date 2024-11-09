<?php

namespace BrainGames;

use function cli\line;
use function cli\prompt;
use function BrainGames\Games\isEven;
use function BrainGames\Games\rightAnswer;

const ROUND_COUNT = 3;

function engine($gameRules, $question)
{
  line('Welcome to the Brain Game!');
  $name = prompt('May I have your name?');
  line("Hello, %s!", $name);
  line($gameRules);

  for ($i = 0; $i < ROUND_COUNT; $i++) {
    line("Question: {$question[$i]}");
    $answer = prompt('Your answer');
    if ($answer === rightAnswer($question[$i])) {
      line("Correct!");
    } else {
      line("\"{$answer}\" is wrong answer ;(. Correct answer was \"{rightAnswer($question[$i]}\".");
      line("Let's try again, {$name}!");
      return;
    }
  }
  line("Congratulations, {$name}!");
  return;
}
