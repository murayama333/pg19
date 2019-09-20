<?php
$array = [[1, 2, 3], [40, 50, 60], [70, 80, 90, 100]];

for($i = 0; $i < count($array); $i++){
  $total = 0;
  for($j = 0; $j < count($array[$i]); $j++){
    $total = $total + $array[$i][$j];
  }
  echo "Total(Row): " . $total . PHP_EOL;
}
