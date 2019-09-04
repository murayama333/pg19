<?php
$file = "monsters.csv";
$handle = fopen($file, "r");

$monsters = [];
while(($line = fgets($handle)) !== false){
  $monster = explode(",", rtrim($line));
  $monsters[] = $monster;
}
fclose($handle);

$total = 0;
foreach ($monsters as $monster) {
  $total += $monster[1];
}
echo $total . PHP_EOL;
