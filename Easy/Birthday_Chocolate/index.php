<?php

function birthday(int $numberOfSquares, array $squares, int $days, int $months) {
    $total = 0;

    for($i = 0 ; $i < $numberOfSquares ; $i ++){
        $sum = 0;
        for($j = $i ; ($j < $numberOfSquares && $j < ($i + $months)); $j++ ){
            $sum += $squares[$j];
            if($sum > $days){
                break;
            }
        }

        if($days === $sum){
            $total++;
        }
    }

    echo $total;

}


$n = readline();
$squares = explode(' ', readline());
[$d, $m] = explode(' ', readline());

birthday($n, $squares, $d, $m);