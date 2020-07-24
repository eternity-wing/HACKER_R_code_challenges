<?php


function binarySearch(Array $arr, $start, $end, $needle){
    if ($end < $start) {
        return -1;
    }

    $mid = floor(($end + $start)/2);
    if ($arr[$mid] === $needle) {
        return $mid;
    }

    if ($arr[$mid] > $needle) {
        return binarySearch($arr, $start, $mid - 1, $needle);
    }
    return binarySearch($arr, $mid + 1, $end, $needle);
}

function countPairs($totalNumbers, $numbers, $k) {
    $count = 0;
    $pairs=[];
    // Sort array elements
//    sort($arr);

    $l = 0;
    $r = 0;
    while($r < $totalNumbers)
    {
        if($numbers[$r] - $numbers[$l] == $k)
        {
            $smaller = $numbers[$l];
            $greater = $numbers[$r];
            $hash = substr(hash('md5',"$smaller-$greater"), 0, 15);
            if(!isset($pairs[$hash])){
                $pairs[$hash] = true;
                $count++;
            }
            $l++;
            $r++;
        } else if($numbers[$r] - $numbers[$l] > $k) {
            $l++;
        } else {
            $r++;
        }
    }
    return $count;
}




$totalNumbers = readline();
$numbers = explode(' ', readline());
$k = readline();

echo countPairs($totalNumbers, $numbers, $k);



//function countPairs($totalNumbers, $numbers, $k) {
//    $pairs = [];
//    $count = 0;
//
//    $index = 0;
//    $previousNumber = null;
//    $lastIndex = $totalNumbers - 1;
//
//    while ($index < $totalNumbers){
//        $number = $numbers[$index];
//
//        if($previousNumber === $number){
//            continue;
//        }
//        $index++;
//        $next = $index;
//
//        $previousNumber = $number;
//
//        $b = $number + $k;
//
//
//        $foundedPair = null;
//        if($next < $lastIndex && ($bIndex = binarySearch($numbers, $next, $lastIndex, $b)) >= 0){
//            $foundedPair = $numbers[$bIndex];
//            $hash = substr(hash('md5',"$number-$foundedPair"), 0, 15);
//            if(!isset($pairs[$hash])){
//                $pairs[$hash] = true;
//                $count++;
//            }
//        }
//
//
//    }
//
//    return $count;
//
//
//
//}