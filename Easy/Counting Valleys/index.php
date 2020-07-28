<?php

function countingValleys(int $n, string $steps) {

    $height = 0;
    $valleiesCount = 0;
    for ($i = 0 ; $i < $n ; $i++){
        $step = $steps[$i] === 'U' ? 1 : -1;
        if($height < 0 && 0 === $height + $step){
            $valleiesCount++;
        }
        $height += $step;
    }

    echo $valleiesCount;
}



$n = readline();

$steps = readline();

countingValleys($n, $steps);