<?php

$a = 2 + (3 * 5);
var_dump($a);
echo '<br>';
$b = 20;
$b = $a + 3;
$a += 3;
$a %= 3;

var_dump($a);
echo '<br>';
var_dump(3 == 3);
echo '<br>';
var_dump(3 === '3');
echo '<br>';
var_dump(2 != 3);
echo '<br>';
var_dump(2 <> 3);
echo '<br>';
var_dump('3' !== '3');
echo '<br>';
var_dump(3 !== '3');
echo '<br>';

$a = 3;
var_dump($a++);
var_dump($a);

var_dump(++$a);
var_dump($a);

var_dump($a--);
var_dump($a);

var_dump(--$a);
var_dump($a);
echo '<br>';