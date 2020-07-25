<?php

function pageCount($n, $p) {
    $fromTheBeginning = ($p % 2 === 0) ? $p / 2 : ($p - 1) / 2;
    $lastPage = $n % 2 === 0 ? $n + 1 : $n;
    $fromTheEnd = (($lastPage - $p) % 2 === 0) ? ($lastPage - $p) / 2 : ($lastPage - $p - 1) / 2;
    echo min($fromTheBeginning, $fromTheEnd);
}

$n = readline();
$p = readline();

pageCount($n, $p);