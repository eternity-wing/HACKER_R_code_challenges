<?php
function alternatingCharacters(string $s) {
    $stringLength = strlen($s);

    $previousCharacter = null;
    $del = 0;
    for ($i = 0 ; $i < $stringLength ; $i++){
        $character = $s[$i];
        if($character === $previousCharacter){
            $del++;
        }else{
            $previousCharacter = $character;
        }
    }
    return $del;
}


$n = readline();
$result = [];
for ($i = 0 ; $i < $n ; $i++){
    $result[]=alternatingCharacters(readline());
}

echo implode("\n", $result);