<?php
$file = "devices.txt";
$lines = file($file, FILE_IGNORE_NEW_LINES);
for ($i = 0; $i < count($lines); $i++) {
  echo $i + 1 . ":" . $lines[$i] . PHP_EOL;
}