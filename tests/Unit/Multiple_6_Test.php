<?php

function solution($number): int
{
    $result = 0;
    for ($i = 0; $i < $number; $i++){
        if($i % 3 == 0 || $i % 5 == 0){
            $result += $i;
        }
    }
    return $result;

}


it('func solution test', function () {
expect(solution(10))->toBe(23);
});
