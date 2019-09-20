<?php
$array = [80, 72, 65, 56, 98, 73];

$total = 0;
for ($i = 0; $i < count($array); $i++) {
    $total += $array[$i];
}
$mean = $total / count($array);

echo "Mean: " . $mean . PHP_EOL;