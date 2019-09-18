<?php
$devices = [["Hard", "Disk", "Drive"], ["Solid", "State", "Drive"]];
foreach ($devices as $device) {
  $str = strtoupper(implode("", $device));
  echo $str . PHP_EOL;
}