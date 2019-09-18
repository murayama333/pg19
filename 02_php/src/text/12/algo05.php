<?php
$array = [-60, 74, -67, 52, 100];

for ($i = 0; $i < count($array); $i++) {
  if ($array[$i] < 0) {
    $array[$i] = -$array[$i];
  }
}

$total = 0;
for ($i=0; $i < count($array); $i++) {
  $total += $array[$i];
}
echo $total . PHP_EOL;