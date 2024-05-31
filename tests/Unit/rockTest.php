<?php
require_once '1-RockPaperScissors.php';

it('result from the game', function () {
    expect(rpc('scissors', 'paper'))->toBeString('Player 1 won!');
});
