<?php

define("CONST_1", "value 1");

echo CONST_1,'<br>';

const CONST_2 = 'value 2';

var_dump(CONST_2,'<br>');

const NAME = 'John';

echo "Hello, {NAME}<br>";

echo '<br>';

$bool = true;
$bool2 = false;

var_dump($bool2,'<br>');

echo $bool2,'<br>';

var_dump((boolean)0, (bool)'', (bool)123, (bool)'Hello<br>');