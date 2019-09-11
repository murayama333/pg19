<?php
function calc_column_total($file, $col) {
  $lines = file($file, FILE_IGNORE_NEW_LINES);
  $total = 0;
  foreach ($lines as $line) {
    $items = explode(",", $line);
    $total += $items[$col - 1];
  }
  return $total;
}

$file = "sale.csv";
echo calc_column_total($file, 1) . PHP_EOL;
echo calc_column_total($file, 2) . PHP_EOL;
echo calc_column_total($file, 3) . PHP_EOL;
