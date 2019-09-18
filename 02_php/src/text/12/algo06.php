<?php
function my_abs($array)
{
  for ($i = 0; $i < count($array); $i++) {
    if ($array[$i] < 0) {
      $array[$i] = -$array[$i];
    }
  }
  return $array;
}

function my_total($array)
{
  $total = 0;
  for ($i=0; $i < count($array); $i++) {
    $total += $array[$i];
  }
  return $total;
}

$array = [-60, 74, -67, 52, 100];
$array = my_abs($array);
$total = my_total($array);
echo $total . PHP_EOL;
