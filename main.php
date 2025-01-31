<?php

$number = rand(1, 100);
$maxAttempts = 0;

$correctLevel = false;
do {
    echo("1. Niski(10 prób)\n2. Średni(5 prób)\n3. Wysoki(3 próby)\n");
    $level = readline("Wybierz poziom trudności: ");
    echo("\n");

    switch ($level){
        case 'Niski':
            $maxAttempts = 10;
            $correctLevel = true;
            break;
        case 'Średni':
            $maxAttempts = 5;
            $correctLevel = true;
            break;
        case 'Wysoki':
            $maxAttempts = 3;
            $correctLevel = true;
            break;
        default:
            echo("Błędna wartość, spróbuj ponownie.\n");
            break;
    }
} while (!$correctLevel);

for($i = 0; $i < $maxAttempts; $i++){
    $attempt = readline("Zgadnij liczbę:");

    if($attempt == $number){
        echo(sprintf("Brawo, zgadłeś!\nUdało ci się to za %d razem\n", $i + 1));
        break;
    } else {
        if($attempt > $number){
            echo("Za dużo!\n");
        } else {
            echo("Za mało!\n");
        }
    }
}

echo("Koniec gry, wykorzystałeś wszystkie próby. Szukana liczba to $number\n");

