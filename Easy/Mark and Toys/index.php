<?php



function maximumToys($prices, $k) {

    sort($prices);

    $x = 0;
    $total = 0;

    foreach ($prices as $price){
        if($price + $x > $k){
            break;
        }
        $x += $price;
        $total++;
    }

    echo $total;

}

[, $k] = explode(' ', readline());
$prices = explode(' ', readline());

maximumToys($prices, $k);