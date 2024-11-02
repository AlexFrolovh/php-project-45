<?php

namespace BrainGames\BrainEven;

use function cli\line;
use function cli\prompt;

function game()
{
  line('Welcome to the Brain Game!');
  $name = prompt('May I have your name?');
  line("Hello, %s!", $name);
  
  line('Answer "yes" if the number is even, otherwise answer "no".');
  line("Question:" 15);
  $answer = prompt('Your answer: ');
}
