<?php
$file = "fruits.csv";
$lines = file($file, FILE_IGNORE_NEW_LINES);
$total = 0;
foreach ($lines as $line) {
    $items = explode(",", $line);
    $total = $total + $items[1];
}
echo "Total: " . $total . PHP_EOL;
