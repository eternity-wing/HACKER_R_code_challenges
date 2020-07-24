<?php

function printNumberOfTallest(array $candleHeights){
    $max = -INF;
    $numberOfTallest = 0;
    foreach ($candleHeights as $candleHeight){
        $candleHeight = (int)$candleHeight;
        if($candleHeight > $max){
            $max = $candleHeight;
            $numberOfTallest = 1;
        }elseif ($candleHeight === $max){
            $numberOfTallest++;
        }
    }
    echo $numberOfTallest;
}
$numberOfCandles = readline();
$candleHeights = explode(' ', readline());
printNumberOfTallest($candleHeights);