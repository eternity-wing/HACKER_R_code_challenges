<?php

function getFractions(array $numbers = []): array{
    $zeroes = 0;
    $negatives = 0;
    $positives = 0;

    foreach ($numbers as $number){
        $number = (int)$number;
        if($number === 0){
            $zeroes++;
        }else{
            $number > 0 ? $positives++ : $negatives++;
        }
    }

    return [$negatives, $zeroes, $positives];

}

function printRatio(int $count, int $total){
    echo number_format((float) $count / $total, 6, '.', '') . "\n";
}

$numberOfItems = readline();
$spaceSeparatedNumbers = readline();
[$negatives, $zeroes, $positives] = getFractions(explode(' ', $spaceSeparatedNumbers));


printRatio($positives, $numberOfItems);
printRatio($negatives, $numberOfItems);
printRatio($zeroes, $numberOfItems);