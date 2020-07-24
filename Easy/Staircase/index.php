<?php

function drawStair(int $sharps, int $spaces){
    if(0 === $sharps){
        return;
    }
    drawStair($sharps - 1, $spaces + 1);
    echo str_repeat(' ', $spaces) . str_repeat('#', $sharps) . ($spaces !== 0 ? "\n" : '');
}

drawStair(readline(), 0);