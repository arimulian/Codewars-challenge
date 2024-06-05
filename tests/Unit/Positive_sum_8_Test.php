<?php
function positive_sum($arr) {
    $sum = 0;
    for($i = 0; $i < count($arr); $i++){
        if($arr[$i] < 0){
            continue;
        }elseif($arr[$i]){
            $sum += $arr[$i];
        }
    }
    return $sum;
}
it('func Sum value, if a negative value to be ignore', function () {
expect(positive_sum([1, 2, 3, 4, 5]))->toBe(15)
    ->and(positive_sum([1, -2, 3, 4, 5]))->toBe(13);
});
