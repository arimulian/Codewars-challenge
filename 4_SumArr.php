<?php

function maps($x) : array
{
    return array_map(fn($num)=>$num + $num, $x);
}

