<?php


function getTotalX(int $array1Length, array $array1, int $array2Length,array $array2) {
    // Write your code here
    $minValue = $array1[0];
    $maxValue = $array2[$array2Length - 1];
    $total = 0;

    $maxArraySizes = max($array1Length, $array2Length);

    for ($number = $minValue ; $number <= $maxValue ; $number++){
        $doesSatisfy = true;

        $index = 0;

        while($index < $maxArraySizes ){
            $array1Item = $array1[$index] ?? null;
            $doNotSatisfy1 = null !== $array1Item && 0 !== ($number % $array1Item);

            $array2Item = $array2[$index] ?? null;
            $doNotSatisfy2 = null !== $array2Item && 0 !== ($array2Item % $number);

            if($doNotSatisfy1 || $doNotSatisfy2){
                $doesSatisfy = false;
                break;
            }
            $index++;
        }
        $total += $doesSatisfy ? 1 : 0;
    }

    echo $total;

}



[$n, $m] = explode(' ', readline());

$array1 = explode(' ', readline());
$array2 = explode(' ', readline());


getTotalX($n, $array1, $m, $array2);