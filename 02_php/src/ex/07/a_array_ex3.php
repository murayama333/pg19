<?php
$fruits = ["Apple" => 100, "Banana" => 200, "Cherry" => 300];
$total = 0;
foreach ($fruits as $key => $value) {
  $total += $value;
}
echo $total . PHP_EOL;
