<?php
$array = [80, 72, 65, 56, 98, 73];

$max = 0;
for ($i = 0; $i < count($array); $i++) {
    if ($max < $array[$i]) {
        $max = $array[$i];
    }
}

echo "Max: " . $max . PHP_EOL;