<?php


function lcs($X , $Y)
{
    $m = strlen($X);

    $L = [];
    for ($i = 0; $i <= $m; $i++)
    {
        $L[$i] = [];
        for ($j = 0; $j <= $m; $j++)
        {
            if ($i === 0 || $j === 0){
                $L[$i][$j] = 0;
            } else if ($X[$i - 1] === $Y[$j - 1]){
                $L[$i][$j] = $L[$i - 1][$j - 1] + 1;
            }else{
                $L[$i][$j] = max($L[$i - 1][$j], $L[$i][$j - 1]);
            }

        }
    }

    echo $L[$m][$m];
}


$s1 = readline();
$s2 = readline();

lcs($s1, $s2);


