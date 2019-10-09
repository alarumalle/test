<?php
//https://github.com/AnnaKarutina/pa_vs19_2
//suurendamine ühe võrra POST!
$x = 10;
$y = $x++; //sama mis $x = $x + 1
echo 'x = ' . $x . '<br>';
echo 'y = ' . $y . '<br>' . '<br>';


//suurendamine ühe võrra PRE!
$x = 10;
$y = ++$x; //sama mis $x = $x + 1
echo 'x = ' . $x . '<br>';
echo 'y = ' . $y;
