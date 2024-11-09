<?php

namespace BrainGames\Games;

use function BrainGames\engine;

function runGameCalc()
{
    $gameRules = "Answer \"yes\" if the number is even, otherwise answer \"no\".";
    $randomNumbers = [rand(0, 100), rand(0, 100), rand(0, 100)];
    $answer = '';
    
    engine($gameRules, $randomNumbers, $answer);
}
