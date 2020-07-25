<?php


function dayOfProgrammer(int $year)
{
    if ($year > 1918) {
        $isLeapYear = ($year % 400) === 0 || (($year % 4) === 0 && ($year % 100) !== 0);
    } else {
        $isLeapYear = ($year % 4) === 0 ;
    }
    $offset = $year === 1918 ? 13 : 0;

    $day = ($isLeapYear ? 12 : 13) + $offset;

    echo $day . '.09.' . $year;
}

$n = readline();

dayOfProgrammer($n);
