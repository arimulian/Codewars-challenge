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
it('func Count By Test', function () {
expect(countBy(1, 5))->toBeArray()
    ->and(countBy(2, 5))->toBeArray();
});
