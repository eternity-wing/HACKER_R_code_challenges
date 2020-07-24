<?php


function countApplesAndOranges(int $houseStart, int $houseEnd,int $appleLocation, int $orangeLocation, array $apples, array $oranges){
    $applesSum = 0;
    $orangesSum = 0;

    foreach ($apples as $apple){
        $applePosition = $appleLocation + $apple;
        if($applePosition >= $houseStart && $applePosition <= $houseEnd){
            $applesSum++;
        }
    }

    foreach ($oranges as $orange){
        $orangePosition = $orangeLocation + $orange;
        if($orangePosition >= $houseStart && $orangePosition <= $houseEnd){
            $orangesSum++;
        }
    }

    echo $applesSum ."\n";
    echo  $orangesSum;

}





[$houseStart, $houseEnd] = explode(' ', readline());

[$appleLocation, $orangeLocation] = explode(' ', readline());
[$numberOfApples, $numberOfOranges] = explode(' ', readline());

$apples = explode(' ', readline());
$oranges = explode(' ', readline());

countApplesAndOranges($houseStart, $houseEnd, $appleLocation, $orangeLocation, $apples, $oranges);