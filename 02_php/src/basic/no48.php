<?php
$file = "fruits.csv";
$lines = file($file, FILE_IGNORE_NEW_LINES);
foreach ($lines as $line) {
    $items = explode(",", $line);
    echo $items[0] . PHP_EOL;
}