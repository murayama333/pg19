<?php
$fruits = [["name" => "melon", "price" => 1000, "color" => "green"],
          ["name" => "banana", "price" => 200, "color" => "yellow"],
          ["name" => "lemon", "price" => 100, "color" => "yellow"]];

$total = 0;
for ($i = 0; $i < count($fruits); $i++) {
  $total = $total + $fruits[$i]["price"];
}
echo "Total: " . $total . PHP_EOL;