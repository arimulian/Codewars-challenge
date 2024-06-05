<?php

function maps($x) : array
{
    return array_map(fn($num)=>$num + $num, $x);
}

it('Sum Arr', function () {
expect(maps([1, 2, 3]))->toBe([2,4,6]);
});
