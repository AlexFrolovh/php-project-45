<?php

namespace BrainGames;

use function cli\line;
use function cli\prompt;
use function BrainGames\Games\isEven;

const ROUND_COUNT = 3;

function engine($gameRules, $Round)
{
  line('Welcome to the Brain Game!');
  $name = prompt('May I have your name?');
  line("Hello, %s!", $name);
  line($gameRules);

  for ($i = 0; $i < ROUND_COUNT; $i++) {
  ['question' => $question, 'rightAnswer' => $rightAnswer] = $Round();
    
    line("Question: {$question}");
    $answer = prompt('Your answer');
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
