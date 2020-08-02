<?php


function orderPrevious(array &$numbers, int $index){
    $expectedNumber = $index + 1;
    $currentNumber = (int) $numbers[$index];
    while($currentNumber < $expectedNumber){
        $numbers[$index] = $numbers[$currentNumber - 1];
        $numbers[$currentNumber - 1] = $currentNumber;
        $currentNumber = (int)$numbers[$index];
    }
}

function minimumSwaps(int $totalNumbers, array $numbers){
    $i = 0;
    $numberOfSwaps = 0;

    while ($i < $totalNumbers){
        $expectedNumber = $i + 1;
        orderPrevious($numbers, $i);
        $currentNumber = (int) $numbers[$i];


        if($currentNumber === $expectedNumber || $expectedNumber === $totalNumbers){
            $numbers[$i] = $expectedNumber === $totalNumbers ? $expectedNumber : $numbers[$i];
            $i++;
            continue;
        }
        $aNumberAhead = (int)$numbers[$i + 1];


        $twoNumberAhead = isset($numbers[$i + 1]) ? (int)$numbers[$i + 1] : ($totalNumbers + 5);


        $range = range($expectedNumber, $expectedNumber + 2);

        $currentRange = [$currentNumber, $aNumberAhead, $twoNumberAhead];

        $diff = array_diff($range, $currentRange);

        $diffCount = count($diff);



        if($diffCount === 0){
            $numberOfSwaps += ($aNumberAhead === ($expectedNumber + 1) || $twoNumberAhead === ($expectedNumber + 2)) ? 1 : 2;
            $numbers[$i] = $expectedNumber;
            $numbers[$i+1] = $expectedNumber + 1;
            $numbers[$i+2] = $expectedNumber + 2;
            $i += 3;
        }else{
            $numberOfSwaps++;
            $i++;
        }
    }


    echo $numberOfSwaps;


}




$totalNumbers = readline();
$numbers = explode(' ', readline());


minimumSwaps($totalNumbers, $numbers);