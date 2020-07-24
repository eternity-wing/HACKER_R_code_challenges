<?php


function maxValue($n, $rounds) {

    $max = -INF;

    $assets = [];

    foreach ($rounds as $round){
        for($asset = $round[0] - 1 ; $asset < $round[1] ; $asset++){
            $assets[$asset] = ($assets[$asset] ?? 0) + $round[2];
            $max = max($max, $assets[$asset]);
        }
    }

    return $max;

}

$n = readline();
$numberOfRounds = readline();
$size = readline();
$rounds = [];
for ($i = 0 ; $i< $numberOfRounds ; $i++){
    $rounds[] = explode(' ', readline());
}

maxValue($n, $rounds);