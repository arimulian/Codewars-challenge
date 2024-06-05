<?php

//3/366
// https://www.codewars.com/kata/515e271a311df0350d00000f/train/php

function square_sum($numbers): float|int
{
    $temp = 0;
    foreach($numbers as  $value){
        $temp += $value * $value;
    }
    return $temp;
}

print(square_sum([1,2,2]));

it('func square_test', function () {
    expect(square_sum([1,2,2]))->toBe(9);
});
