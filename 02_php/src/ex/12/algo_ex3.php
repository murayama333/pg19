<?php
$array = [60, 74, 67, 52, 95, 73, 45, 72, 81, 90, 70];
$target = 80;

$count = 0;
for ($i = 0; $i < count($array); $i++) {
  if ($array[$i] >= $target) {
    $count++;
  }
}
echo $count . PHP_EOL;