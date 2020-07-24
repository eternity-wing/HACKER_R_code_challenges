<?php


function breakingRecords(array $scores) {
    $min = INF;
    $max = - INF;
    $maxCount = 0;
    $minCount = 0;

    foreach ($scores as $score){
        if($score < $min){
            $min = $score;
            $minCount++;
        }
        if($score > $max){
            $max = $score;
            $maxCount++;
        }
    }

    echo ($maxCount - 1) . ' ' . ($minCount - 1);
}



$n = readline();
$scores = explode(' ', readline());
breakingRecords($scores);