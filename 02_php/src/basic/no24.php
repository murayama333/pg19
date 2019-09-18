<?php
$device = "Central Processing Unit";
$array = explode(" ", $device);
for ($i = 0; $i < count($array); $i++) {
  echo substr($array[$i], 0 , 1);
}
