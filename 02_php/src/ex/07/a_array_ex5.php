<?php
$fruits = [
  "Apple" => ["price" => 100, "color" => "red"],
  "Banana" => ["price" => 200, "color" => "yellow"],
  "Cherry" => ["price" => 300, "color" => "red"],
];

foreach ($fruits as $key => $value) {
  if ($value["color"] === "red") {
    echo $key . " : " . $value["price"] . PHP_EOL;
  }
}

