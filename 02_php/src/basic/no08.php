<?php
$prices = [1000, 2000, 3000];
$tax = 1.08;
$total = 0;
for ($i=0; $i < count($prices); $i++) {
  $total = $total + $prices[$i];
}

$total = $total * $tax;

echo $total . PHP_EOL;