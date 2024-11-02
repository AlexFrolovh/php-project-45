<?php 

echo "Welcome to the Brain Games!\n";
$name = readline('May I have your name? ');
echo "Hello, {$name}!\n";
echo 'Answer "yes" if the number is even, otherwise answer "no".';

$i = 0;
while ($i < 3) {
  if ($i === 0) {
    echo "\nQuestion: 15";
    $answer = readline("\nYour answer: ");
    if ($answer === 'no') {
      echo "Correct!";
      $i += 1;
      } else {
      echo "'{$answer}' is wrong answer ;(. Correct answer was 'no'.\nLet's try again, {$name}!";
    }
  }
  if ($i === 1) {
    echo "\nQuestion: 6";
    $answer = readline("\nYour answer: ");
    if ($answer === 'yes') {
      echo "Correct!";
      $i += 1;
      } else {
      echo "'{$answer}' is wrong answer ;(. Correct answer was 'yes'.\nLet's try again, {$name}!";
      $i = 0;
    }
  }
  if ($i === 2) {
    echo "\nQuestion: 7";
    $answer = readline("\nYour answer: ");
    if ($answer === 'no') {
      echo "Correct!";
      $i += 1;
      } else {
      echo "'{$answer}' is wrong answer ;(. Correct answer was 'no'.\nLet's try again, {$name}!";
      $i = 0;
    }
  }
}
echo "\nCongratulations, {$name}!";
