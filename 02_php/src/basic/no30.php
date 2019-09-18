<?php
$fruits = ["Apple", "Melon", "Orange"];

foreach ($fruits as $fruit) {
    if (substr($fruit, strlen($fruit) - 1) === "e") {
      echo $fruit . PHP_EOL;
    }
}