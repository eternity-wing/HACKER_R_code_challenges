<?php


function maxSubsetSum(int $n, array $arr)
{
    $sum = -INF;

    $sumArr = [];
    for ($step = $n - 1; $step >= 2 ; $step--) {
        for ($i = 0; $i + $step < $n; $i++) {
            $sumArr[$i] = $sumArr[$i] ?? [];
            for ($j = $i + $step; $j < $n; $j+=$step) {
                if($j - $i === $step){
                    $sumArr[$i][$j] = (int)$arr[$i] + (int)$arr[$j];
                }else{
                    $sumArr[$i][$j] = $sumArr[$i][$j - $step] + (int)$arr[$j];
                }
                $sum = max($sum, $sumArr[$i][$j]);
            }
        }
    }
    echo $sum;
}

$n = readline();
$array = explode(' ', readline());

maxSubsetSum($n, $array);

