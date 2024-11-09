<?php

namespace BrainGames\Games;

use function cli\line;
use function BrainGames\engine;

function isEven($number)
{
    return ($number % 2 === 0);
}

function runGameEven()
{
    $gameRules = "Answer \"yes\" if the number is even, otherwise answer \"no\".";
    /*$Round = function () {
        $question = rand(0, 100);
        $rightAnswer = isEven($question) ? 'yes' : 'no';
    
        return ['question' => $question, 'rightAnswer' => $rightAnswer];
    };*/
    $question = rand(0, 100);
    $rightAnswer = isEven($question) ? 'yes' : 'no';
    line("Question: {$question}");
    
    engine($gameRules, $rightAnswer);
}
