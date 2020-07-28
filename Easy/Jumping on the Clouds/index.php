<?php
function countingValleys(int $n, array $steps) {

    $count = 0;
    $i = 0;
    while($i < $n - 1){
        $count++;
        $twoStepFurther = $steps[$i+2] ?? 0;
        $i += (0 === (int)$twoStepFurther) ? 2 : 1;
    }

    echo $count;
}



$n = readline();

$steps = explode(' ', readline());



countingValleys($n, $steps);