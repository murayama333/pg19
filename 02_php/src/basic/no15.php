<?php
$fruits = ["melon" => 1000, "banana" => 200, "lemon" => 100];

$total = 0;
foreach ($fruits as $key => $value) {
  $total += $value;
}

echo "Total: " . $total . PHP_EOL;