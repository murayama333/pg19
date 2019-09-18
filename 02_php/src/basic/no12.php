<?php
$array = [80, 72, 65, 56, 98, 73];

for($i = 0; $i < count($array); $i++){
  for($j = 0; $j < count($array) - 1 - $i; $j++){
    if ($array[$j] > $array[$j + 1]){
      $tmp = $array[$j];
      $array[$j] = $array[$j + 1];
      $array[$j + 1] = $tmp;
    }
  }
}
print_r($array);