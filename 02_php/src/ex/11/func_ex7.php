<?php
function calc_total($file) {
  $lines = file($file, FILE_IGNORE_NEW_LINES);
  $total = 0;
  foreach ($lines as $line) {
    $total += $line;
  }
  return $total;
}

$file = "sale.txt";
echo calc_total($file);
