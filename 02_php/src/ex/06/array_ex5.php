<?php
$names = ["Alice", "Bob"];

$tmp = $names[0];
$names[0] = $names[1];
$names[1] = $tmp;

var_dump($names);
