<?php
$fruits = [
  "Apple" => ["price" => 100, "color" => "red"],
  "Banana" => ["price" => 200, "color" => "yellow"],
  "Cherry" => ["price" => 300, "color" => "red"],
  "Lemon" => ["price" => 100, "color" => "yellow"],
];

$redTotal = 0;
$yellowTotal = 0;
foreach ($fruits as $key => $value) {
  if ($value["color"] === "red") {
    $redTotal = $redTotal + $value["price"];
  }
  if ($value["color"] === "yellow") {
    $yellowTotal = $yellowTotal + $value["price"];
  }
}

echo $redTotal . PHP_EOL;
echo $yellowTotal . PHP_EOL;
