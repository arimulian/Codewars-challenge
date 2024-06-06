<?php

function getCount($str) : int {
    $vowelsCount = 0;
    $vowels = ['a', 'i', 'u', 'e', 'o'];
    for ($i = 0; $i < strlen($str); $i++) {
        if (in_array($str[$i], $vowels)) {
            $vowelsCount++;
        }

    }
    return $vowelsCount;
}
