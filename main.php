<?php

$number = rand(1, 100);
$maxAttempts = 0;

$level = readline("Wybierz poziom trudności: ");

switch ($level){
    case 'easy':
        $maxAttempts = 10;
        break;
    case'medium':
        $maxAttempts = 5;
        break;
    case 'hard':
        $maxAttempts = 3;
        break;
}

