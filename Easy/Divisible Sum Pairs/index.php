<?php
function divisibleSumPairs(int $numberOfItems, array $items, int $k) {
    $total = 0;
    for ($i = 0; $i < $numberOfItems ; $i++){
        for ($j = $i + 1; $j < $numberOfItems ; $j++){
            $total += (($items[$i] + $items[$j]) % $k) === 0 ? 1 : 0;
        }
    }
    echo $total;

}

[$n, $k] = explode(' ', readline());

$numbers = explode(' ', readline());

divisibleSumPairs($n, $numbers, $k);
