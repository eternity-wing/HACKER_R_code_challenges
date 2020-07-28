<?php

function repeatedString(string $str, int $n) {
    $totalOccurances = substr_count($str,'a');
    $strLength = strlen($str);
    $occurancesInTruncatedString = substr_count(substr($str, 0, $n % $strLength),'a');
    echo ($totalOccurances * (int)($n / $strLength)) + $occurancesInTruncatedString;
}

$str = readline();
$n = readline();

repeatedString($str, $n);