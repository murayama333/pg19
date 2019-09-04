<?php
$cities = ["Osaka", "Sakai", "Hirakata"];

$file = "cities.txt";
$handle = fopen($file, "w");

foreach ($cities as $city) {
  fwrite($handle, $city . PHP_EOL);
}

fclose($handle);