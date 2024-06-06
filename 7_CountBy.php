<?php
function countBy($x, $n): array
{
    $z = [];
    for($i=0; $i < $n; $i++){
        $z[] = $x;
        $x = $z[$i] + $z[0];
    }

    return $z;
}
