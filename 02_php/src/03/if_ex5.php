<?php
$price = 2000;

echo "PRICE:$price" . PHP_EOL;

if ($price >= 500) {
  $point = (int)($price / 500);
  echo "POINT:$point" . PHP_EOL;
}