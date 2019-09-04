<?php
$file = "monsters.csv";
$handle = fopen($file, "r");

$monsters = [];
while(($line = fgets($handle)) !== false){
  $monster = explode(",", rtrim($line));
  $monsters[] = $monster;
}
fclose($handle);

$max = 0;
foreach ($monsters as $monster) {
  if ($max < $monster[1]) {
      $max = $monster[1];
  }
}
echo $max . PHP_EOL;