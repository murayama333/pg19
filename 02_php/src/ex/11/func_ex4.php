<?php
function array_double($array)
{
  $result = [];
  for ($i = 0; $i < count($array); $i++) {
    $result[] = 2 * $array[$i];
  }
  return $result;
}

$prices = [100, 200, 300];
$result = array_double($prices);
print_r($result);