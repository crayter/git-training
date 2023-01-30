<?php
$price = 10;
var_dump($price);
echo '<br>';
$light = 'green';

if ($light == 'green') {
    echo 'You can go now';
} else {
    echo 'Stop';
}

echo ($light == 'green') ? 'You can go now' : 'Stop';

echo $price ? $price : 'unknown price';
echo '<br>';

$test = $price ?: 'unknown price';
var_dump($test);