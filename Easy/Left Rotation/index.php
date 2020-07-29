<?php


function rotLeft(int $numberOfItems, array $items, int $numberOfRotations) {
    $deviationOffset = $numberOfRotations % $numberOfItems;
    $cnt = 0;
    while ($cnt !== $numberOfItems){
        echo ($cnt > 0 ? ' ': '') . ($items[($deviationOffset) % ($numberOfItems)]);
        $deviationOffset++;
        $cnt++;
    }

}


[$numberOfItems, $numberOfRotations] = explode(' ', readline());

$items = explode(' ', readline());

rotLeft($numberOfItems, $items, $numberOfRotations);