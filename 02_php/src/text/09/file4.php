<?php
$file = "cities.txt";
$handle = fopen($file, "r");

$line = fgets($handle);
while ($line !== false) {
  echo $line;
  $line = fgets($handle);
}

fclose($handle);
