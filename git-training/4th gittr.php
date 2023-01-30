<?php

$min = 60;
$hour = $min * 60;
$day = $hour * 24;
$week = $day * 7;

var_dump($hour, $day, $week);
echo '<br>';


$x = 60;
var_dump($x *= 60);
var_dump($x *= 24);
var_dump($x *= 7);
echo '<br>';


$light = 'red';

if ($light == 'green') {
    echo 'You can go now';
} else {
    echo 'Stop';
}
echo '<br>';