<?php

function kangaroo($x1, $v1, $x2, $v2)
{
    if(($v1 - $v2) === 0){
        $result = 'NO';
    }else{
        $t = ($x2 - $x1) % ($v1 - $v2);
        $z = ($x2 - $x1) / ($v1 - $v2);
        $result = $t === 0 && $z > 0 ? 'YES' : 'NO';
    }
    echo $result;
}


[$x1, $v1, $x2, $v2] = explode(' ', readline());
kangaroo($x1, $v1, $x2, $v2);