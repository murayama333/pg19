<?php
$array = [-60, 74, -67, 52, 100];

$total = 0;
for ($i = 0; $i < count($array); $i++) {

  if ($array[$i] >= 0) {
    $total = $total + $array[$i];
  } else {
    $total = $total - $array[$i];
  }
}

echo $total . PHP_EOL;