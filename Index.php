<?php

include 'Player.php';
include 'Game.php';

$p1 = new Player($type = "COPYCAT");
$p2 = new Player($type = 'BOT');

$game = new Game($p1, $p2);

$game->play(5);
$game->printScore();

print("\n");
