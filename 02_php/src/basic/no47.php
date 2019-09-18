<?php
$file = "point.txt";
$lines = file($file, FILE_IGNORE_NEW_LINES);
sort($lines);
$str = implode(",", $lines);
echo $str . PHP_EOL;