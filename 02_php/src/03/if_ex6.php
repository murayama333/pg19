<?php
$price = 500;
$gold = false;

$point_price = 1000;
$member = "NORMAL";
if ($gold) {
  $point_price = 500;
  $member = "GOLD";
}

echo "PRICE:$price" . PHP_EOL;
echo "MEMBER:$member" . PHP_EOL;
if ($gold && $price >= 500 || !$gold && $price >= 1000) {
  $point = (int)($price / $point_price);
  echo "POINT:$point" . PHP_EOL;
}
