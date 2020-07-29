<?php

const MATRIX_SIZE = 6;

function hourglassSum(array $matrix) {


    $max = -INF;

    for ($row = 0 ; $row < MATRIX_SIZE - 2 ; $row++){
        for ($col = 0 ; $col < MATRIX_SIZE - 2 ; $col++){
            $firstRowSum = (int)$matrix[$row][$col] + (int)$matrix[$row][$col+1] + (int)$matrix[$row][$col+2];
            $thirdRowSum = (int)$matrix[$row+2][$col] + (int)$matrix[$row+2][$col+1] + (int)$matrix[$row+2][$col+2];
            $sum = $firstRowSum + (int)$matrix[$row + 1][$col+1] + $thirdRowSum;
            $max = max($sum, $max);
        }
    }

    echo $max;

}

$matrix = [];

for($line = 0 ; $line < 6 ; $line++){
    $matrix[$line] = explode(' ', readline());;
}

hourglassSum($matrix);

//$z = [
//    '-9 -9 -9  1 1 1',
//    '0 -9  0  4 3 2',
//    '-9 -9 -9  1 2 3',
//    '0  0  8  6 6 0',
//    '0  0  0 -2 0 0',
//    '0  0  1  2 4 0'
//];
//$matrix = [];
//
//for($line = 0 ; $line < 6 ; $line++){
//    $matrix[$line] = explode(' ', $z[$line]);
//}


//hourglassSum($matrix);

