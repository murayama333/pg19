<?php
$file = "number.txt";
$handle = fopen($file, "r");
$numbers = [];
while (($line = fgets($handle)) !== false) {
  $numbers[] = (int)rtrim($line);
}
fclose($handle);
// var_dump($numbers);

$total = 0;
foreach ($numbers as $number) {
  $total += $number;
}
echo $total . PHP_EOL;
