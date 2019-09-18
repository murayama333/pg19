<?php
$fruits = [["name" => "melon", "price" => 1000, "color" => "green"],
          ["name" => "banana", "price" => 200, "color" => "yellow"],
          ["name" => "lemon", "price" => 100, "color" => "yellow"]];

for ($i = 0; $i < count($fruits); $i++) {
  if ($fruits[$i]["color"] == "yellow") {
      echo $fruits[$i]["name"] . PHP_EOL;
  }
}
