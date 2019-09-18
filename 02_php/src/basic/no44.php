<?php
$file = "devices.txt";
$lines = file($file, FILE_IGNORE_NEW_LINES);
for ($i = 0; $i < count($lines); $i++) {
  if (strpos($lines[$i], "Drive") !== false) {
    echo $lines[$i] . PHP_EOL;
  }
}
