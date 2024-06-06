<?php

// 1/366
// https://www.codewars.com/kata/5672a98bdbdd995fad00000f
function rpc($p1, $p2) : string
{
    $data = [
        'scissors',
        'paper',
        'rock'
    ];

    if (($p1 == $data[2] && $p2 == $data[0]) || ($p1 == $data[0] && $p2 == $data[1]) || ($p1 == $data[1] && $p2 == $data[2])) {
        return 'Player 1 won!';
    } else if (($p1 == $data[0] && $p2 == $data[2]) || ($p1 == $data[1] && $p2 == $data[0]) || ($p1 == $data[2] && $p2 == $data[1])) {
        return 'Player 2 won!';
    }

    return 'Draw!';
}
