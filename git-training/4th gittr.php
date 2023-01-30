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

if ($light == 'green') {
    echo 'You can go now';
} elseif ($light == 'yellow') {
    echo 'Get ready';
} elseif ($light == 'red') {
    echo 'Stop';
    if (2 > 3) {
        echo '2 > 3';
    } else {
        echo '2 < 3';
    }
} else {
    echo 'Something';
}
echo '<br>';