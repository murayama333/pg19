<?php
function sum($array)
{
  $total = 0;
  for ($i = 0; $i < count($array); $i++) {
    $total += $array[$i];
  }
  return $total;
}

$prices = [1000, 2000, 3000];
$result = sum($prices);
echo $result;