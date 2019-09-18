<?php
$fruits = ["Lemon", "Melon", "Orange"];

foreach ($fruits as $fruit) {
    if (stripos($fruit, "m") !== false) {
      echo $fruit . PHP_EOL;
    }
}