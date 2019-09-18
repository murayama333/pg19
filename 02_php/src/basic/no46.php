<?php
$file = "point.txt";
$lines = file($file, FILE_IGNORE_NEW_LINES);
$total = 0;
for ($i = 0; $i < count($lines); $i++) {
  $total += $total + $lines[$i];
}
echo $total . PHP_EOL;