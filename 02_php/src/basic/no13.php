<?php
$array = [[1, 2, 3], [40, 50, 60], [70, 80, 90, 100]];

$total = 0;
for($i = 0; $i < count($array); $i++){
  for($j = 0; $j < count($array[$i]); $j++){
    $total = $total + $array[$i][$j];
  }
}
echo "Total:" . $total . PHP_EOL;
