<?php

function bonAppetit(array $bills, int $k, int $b) {
    $sum = array_sum($bills);
    $annaFee = ($sum - $bills[$k]) / 2;
    $result = $b - $annaFee;
    echo 0 === $result ? 'Bon Appetit' : $result;
}

[$n, $k] = explode(' ', readline());
$bills = explode(' ', readline());
$b = readline();

bonAppetit($bills, $k, $b);