<?php


function maxSubsetSum(int $n, array $arr)
{
    $prev_prev = (int)$arr[0];
    $prev = max($prev_prev, (int)$arr[1]);
    for ($i = 2; $i < $n; $i++) {
        $current = max((int)$arr[$i], $prev_prev + (int)$arr[$i], $prev);
        $prev_prev = $prev;
        $prev = $current;
    }

    echo $prev;
}

$n = readline();
$array = explode(' ', readline());

maxSubsetSum($n, $array);

