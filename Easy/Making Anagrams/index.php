<?php

function makeAnagram1(string $a, string $b) {

    $a = count_chars($a,1);
    $b = count_chars($b,1);

    $numberOfDeletes = 0;

    for ($i = 97 ; $i < 123 ; $i++){
        $x = $a[$i] ?? 0;
        $y = $b[$i] ?? 0;
        $numberOfDeletes += abs($x - $y);
    }

    echo $numberOfDeletes;

}


makeAnagram1(readline(), readline());
