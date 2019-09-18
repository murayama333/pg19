<?php
$file = "protocol.txt";
$lines = file($file, FILE_IGNORE_NEW_LINES);
$target = "transfer";

$result = [];
foreach ($lines as $line) {
  if (stripos($line, $target) !== false) {
    $result[] = $line;
  }
}

print_r($result);