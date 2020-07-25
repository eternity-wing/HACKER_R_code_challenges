<?php
function sockMerchant(int $numberOfSucks, array $socksArray) {
    $numberOfOdds = 0;
    $odss = [];
    foreach ($socksArray as $socks){
        if($odss[$socks] ?? true){
            $numberOfOdds++;
            $odss[$socks] = false;
        }else{
            $numberOfOdds--;
            $odss[$socks] = true;
        }
    }

    echo ($numberOfSucks - $numberOfOdds) / 2;

}

$numberOfSucks = readline();
$socks = explode(' ', readline());

sockMerchant($numberOfSucks, $socks);