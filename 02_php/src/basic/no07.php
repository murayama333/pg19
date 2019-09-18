<?php
$prices = [1000, 2000, 3000];

$total = 0;
for ($i=0; $i < count($prices); $i++) {
  $total = $total + $prices[$i];
}

echo $total . PHP_EOL;