<?php

function isValid(string $str){
    $charactersFrequency = count_chars($str, 1);
    $x = [];
    foreach ($charactersFrequency as $item){
        $x[$item] = ($x[$item] ?? 0 ) + 1;
    }
    $xCount = count($x);
    $frequencies = array_keys($x);
    if($xCount !== 2 || ($xCount === 2 && $x[$frequencies[0]] > 1 && $x[$frequencies[1]] > 1)){
        echo $xCount === 1 ? 'YES':'NO';
    }else{
        [$frequentlyDistribution , $extraCharacterFreq] = $x[$frequencies[0]] > 1 ? [$frequencies[0], $frequencies[1]] : [$frequencies[1], $frequencies[0]];
        $extraCharacterFreq--;

        echo ($extraCharacterFreq === 0 || ($extraCharacterFreq - $frequentlyDistribution) === 0) ? 'YES':'NO';
    }


}


isValid(readline());