<?php

// 2/366
// https://www.codewars.com/kata/53da3dbb4a5168369a0000fe/train/php
function even_or_odd(int $n): string {
    if($n % 2 == 1 || -$n % 2 == 1) return 'Odd';
    return "Even";
}
