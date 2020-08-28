<?php


function getMedian(array $period, int $d): float
{
    $isEvenRange = 0 === ($d % 2);
    $midPosition = (int)(($d + 1) / 2);
    $mid = null;


    $number = 0;
    $position = 0;



    while($number <= 200){
        $frequency = $period[$number] ?? 0;
        if($frequency === 0){
            $number++;
            continue;
        }
        $position += $frequency;

        if(null === $mid && $position >= $midPosition){
            $mid = $number;
        }

        if(null !== $mid && !$isEvenRange){
            return $mid;
        }

        if($position >= ($midPosition + 1)){
            return ((float)($number + $mid)) / 2;
        }
        $number++;
    }

}


function activityNotifications(array $expenditures, int $n, int $d)
{
    $period = [];

    for ($i = 0; $i < $d; $i++) {
        $expenditure = (int)$expenditures[$i];
        $period[$expenditure] = ($period[$expenditure] ?? 0) + 1;
    }

    $notifyCount = 0;
    $j = 0;
    for ($i = $d; $i < $n; $i++) {
        $expenditure = (int)$expenditures[$i];
        $median = getMedian($period, $d);
        if($expenditure >= ($median * 2)){
            $notifyCount++;
        }
        $period[(int)$expenditures[$j]]--;
        $period[$expenditure] = ($period[$expenditure] ?? 0) + 1;
        $j++;
    }
    echo $notifyCount;
}

[$n, $d] = explode(' ', readline());
$expenditures = explode(' ', readline());
activityNotifications($expenditures, $n,$d);