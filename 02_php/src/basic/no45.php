<?php
$file = "devices.txt";
$lines = file($file, FILE_IGNORE_NEW_LINES);
for ($i = 0; $i < count($lines); $i++) {
  $items = explode(" ", $lines[$i]);
  foreach ($items as $item) {
    echo substr($item, 0, 1);
  }
  echo PHP_EOL;
}