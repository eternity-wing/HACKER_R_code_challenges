<?php
function to24hourClock(string $a12hourClock){
    [$time, $period] = str_split($a12hourClock, 8);
    [$hour, $min, $second] = explode(':', $time);
    $hour = (int)$hour;
    if(($period === 'PM' && $hour !== 12) || ($hour === 12 && $period === 'AM')){
        $time = str_pad((($hour + 12) % 24), 2, 0) . ':' . $min . ':' . $second;
    }
    echo $time;
}

to24hourClock(readline());