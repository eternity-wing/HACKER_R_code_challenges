<?php
function substrCount(int $n, string $s) {
    $cnt = 0;
    $previousCharacter = null;
    $previousCharacterRepeats = 0;
    for ($i = 0; $i < $n; $i++) {
        $character = $s[$i];
        $nextCharacter = $s[$i + 1] ?? '&';

        if($character !== $previousCharacter && $nextCharacter === $previousCharacter){
            $aheadRepeats = 0;
            for ($ahead = $i+1; ($ahead < $n && $ahead <= ($i + $previousCharacterRepeats)) ; $ahead++) {
                $aheadCharacter = $s[$ahead];
                if($aheadCharacter !== $previousCharacter){
                    break;
                }
                $aheadRepeats++;
            }

            $cnt += $previousCharacterRepeats > 0 ? array_sum(range(1, $previousCharacterRepeats)) : 0;
            $cnt += $aheadRepeats;
            $previousCharacterRepeats = 1;
            $previousCharacter = $character;
        }elseif ($character !== $previousCharacter){

            $cnt += $previousCharacterRepeats > 0 ? array_sum(range(1, $previousCharacterRepeats)) : 0;
            $previousCharacterRepeats = 1;
            $previousCharacter = $character;
        }else{
            $previousCharacterRepeats++;
        }

    }
    $cnt += $previousCharacterRepeats > 0 ? array_sum(range(1, $previousCharacterRepeats)) : 0;

    echo $cnt;

}

$n = readline();
$str = readline();

substrCount($n,$str);
