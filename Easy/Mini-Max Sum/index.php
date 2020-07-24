<?php
function printMiniMax(array $numbers){
    $min = INF;
    $max = -INF;
    $sum = 0;
    foreach ($numbers as $number){
        $number = (int)$number;
        $sum += $number;
        $min = min($number, $min);
        $max = max($number, $max);
    }
    echo ($sum - $max) . ' ' . ($sum - $min);
}

$numbers = explode(' ', readline());
printMiniMax($numbers);