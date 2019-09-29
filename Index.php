<?php

include 'Player.php';
include 'Game.php';


$p1 = new Player($type = "KINDBOT");
$p2 = new Player($type = 'EVILBOT');
$game1 = new Game($p1, $p2);
$game1->play(5);
$game1->printScore();


$p3 = new Player($type = "EVILBOT");
$p4 = new Player($type = 'COPYBOT');
$game2 = new Game($p3, $p4);
$game2->play(5);
$game2->printScore();

$p5 = new Player($type = "COPYBOT");
$p6 = new Player($type = 'GRUDGE');
$game3 = new Game($p5, $p6);
$game3->play(5);
$game3->printScore();

$p7 = new Player($type = "KINDBOT");
$p8 = new Player($type = 'GRUDGE');
$game4 = new Game($p7, $p8);
$game4->play(5);
$game4->printScore();


$p9 = new Player($type = "KINDBOT");
$p10 = new Player($type = 'EVILBOT');
$game5 = new Game($p9, $p10);
$game5->play(5);
$game5->printScore();


$p9 = new Player($type = "KINDBOT");
$p10 = new Player($type = 'GRUDGE');
$game5 = new Game($p9, $p10);
$game5->play(5);
$game5->printScore();

$p9 = new Player($type = "KINDBOT");
$p10 = new Player($type = 'GRUDGE');
$game5 = new Game($p9, $p10);
$game5->play(5);
$game5->printScore();

$p9 = new Player($type = "KINDBOT");
$p10 = new Player($type = 'GRUDGE');
$game5 = new Game($p9, $p10);
$game5->play(5);
$game5->printScore();




print("\n");
