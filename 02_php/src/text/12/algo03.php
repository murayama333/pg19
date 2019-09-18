<?php
$array = [60, 74, 67, 52, 95, 73, 45, 72, 81, 90, 70];
$target = $argv[1];

sort($array);
$left = 0;
$right = count($array) - 1;

$search = false;
while($left <= $right) {
  $mid = (int)(($left + $right) / 2);
  if ($array[$mid] > $target) {
    $right = $mid - 1;
  } else if ($array[$mid] < $target) {
    $left = $mid + 1;
  } else {
    $search = true;
    break;
  }
}

if ($search) {
  echo "Found" . PHP_EOL;
} else {
  echo "Not Found" . PHP_EOL;
}
