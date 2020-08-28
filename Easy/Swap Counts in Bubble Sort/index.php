<?php

function countSwap(int $numberOfItems, array $numbers)
{
    $numberOfSwaps = 0;
    for ($i = 0; $i < $numberOfItems; $i++) {

        for ($j = 0; $j < $numberOfItems - 1; $j++) {
            if ($numbers[$j] > $numbers[$j + 1]) {
                $temp = $numbers[$j];
                $numbers[$j] = $numbers[$j + 1];
                $numbers[$j + 1] = $temp;
                $numberOfSwaps++;
            }
        }
    }

    echo "Array is sorted in {$numberOfSwaps} swaps.\n";
    echo "First Element: {$numbers[0]}\n";
    echo "Last Element: {$numbers[$numberOfItems - 1]}\n";
}

$n = readline();
$array = explode(' ', readline());

countSwap($n, $array);