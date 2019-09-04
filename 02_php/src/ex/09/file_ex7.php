<?php
$monsters = [
  ["name" => "slyme", "hp" => 10],
  ["name" => "dragon", "hp" => 100],
  ["name" => "golem", "hp" => 300]
];

$file = "monsters.csv";
$handle = fopen($file, "w");
foreach ($monsters as $monster) {
  $line = $monster["name"] . "," . $monster["hp"] . PHP_EOL;
  fwrite($handle, $line);
}
fclose($handle);