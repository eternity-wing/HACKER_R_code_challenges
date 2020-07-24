<?php


function migratoryBirds(array $birdTypes) {
    $typeStatistics = [];
    $max = - INF;
    $maxTypeId = null;

    foreach ($birdTypes as $birdType){
        $typeStatistics[$birdType] = ($typeStatistics[$birdType] ?? 0) + 1;
        if($typeStatistics[$birdType] >= 2 && $max <= $typeStatistics[$birdType]){
            $maxTypeId = $max === $typeStatistics[$birdType]? min($maxTypeId, $birdType) : $birdType;
            $max = $typeStatistics[$birdType];
        }
    }
    echo $maxTypeId;

}

$numberOfTypes = readline();
$birdTypes = explode(' ', readline());
migratoryBirds($birdTypes);