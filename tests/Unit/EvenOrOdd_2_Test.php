<?php

// 2/366
// https://www.codewars.com/kata/53da3dbb4a5168369a0000fe/train/php
function even_or_odd(int $n): string {
    if($n % 2 == 1 || -$n % 2 == 1) return 'Odd';
    return "Even";
}


describe('func even_or_odd Test', function () {
    it('should be result to be odd number', function () {
    expect(even_or_odd(1))->toBe('Odd');
    });

    it('should be result to be even number', function () {
        expect(even_or_odd(2))->toBe('Even');
    });

    it('should be result to be odd number value number minus', function () {
    expect(even_or_odd(-1))->toBe('Odd');
    });

    it('should be result to be even number minus value number minus', function () {
        expect(even_or_odd(-2))->toBe('Even');
    });
});