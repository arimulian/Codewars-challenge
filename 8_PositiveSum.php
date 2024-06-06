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
