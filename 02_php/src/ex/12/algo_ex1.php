<?php
$x = "Alice";
$y = "Bob";

$t = $x;
$x = $y;
$y = $t;

echo $x . PHP_EOL;
echo $y . PHP_EOL;

