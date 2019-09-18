<?php
$vegetables = ["Carrot", "Corn", "Cucumber"];

$max_length = 0;
foreach ($vegetables as $vegetable) {
  $length = strlen($vegetable);
  if ($max_length < $length) {
    $max_length = $length;
  }
}

foreach ($vegetables as $vegetable) {
  echo str_pad($vegetable,  $max_length, "*") . PHP_EOL;
}
