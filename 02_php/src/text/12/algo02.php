<?php
$array = [60, 74, 67, 52, 95, 73, 45, 72, 81, 90, 70];
$target = $argv[1];

$search = false;
for($i = 0; $i < count($array); $i++){
  if ($array[$i] == $target) {
    $search = true;
    break;
  }
}

if ($search) {
  echo "Found" . PHP_EOL;
} else {
  echo "Not Found" . PHP_EOL;
}
