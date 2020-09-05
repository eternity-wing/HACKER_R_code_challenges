<?php

function whatFlavors(array $costs, int $numberOfItems, int $money)
{
    $indexTable = [];

    $startIndex = null;

    for ($i = 0; $i < $numberOfItems; $i++) {
        $cost = (int)$costs[$i];
        if ($cost >= $money) {
            continue;
        }

        $curr = $i;

        if (!isset($indexTable[$cost])) {
            $indexTable[$cost] = ['min_index' => $curr, 'max_index' => $curr];
        } else {
            $indexTable[$cost]['min_index'] = min($indexTable[$cost]['min_index'], $curr);
            $indexTable[$cost]['max_index'] = max($indexTable[$cost]['max_index'], $curr);
        }


        $startIndex = $startIndex ?? $curr;
    }


    for ($i = $startIndex; $i < $numberOfItems; $i++) {
        $cost = (int)$costs[$i];
        $pair = $money - $cost;
        if(!isset($indexTable[$pair])){
            continue;
        }
        $z = $indexTable[$pair];
        $minIndex = $z['min_index'];
        $maxIndex = $z['max_index'];
        if($i < $minIndex || $i < $maxIndex){
            echo ($i + 1) . ' ' . (($i < $minIndex ? $minIndex : $maxIndex) + 1);
            break;
        }
    }



}

$t = (int)readline();

for ($i = 0; $i < $t; $i++) {
    $money = (int)readline();
    $n = (int)readline();
    $costs = explode(' ', readline());
    if($i > 0){
        echo "\n";
    }
    whatFlavors($costs, $n, $money);
}
