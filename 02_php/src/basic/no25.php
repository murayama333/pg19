<?php
$devices = ["Hard Disk Drive", "Solid State Drive"];

for ($i = 0; $i < count($devices); $i++) {
  $array = explode(" ", $devices[$i]);
  for ($j = 0; $j < count($array); $j++) {
    echo substr($array[$j], 0, 1);
  }
  echo PHP_EOL;
}
