<?php
function first_char($str) {

  return substr($str, 0, 1);
}

$value = "Apple";
echo first_char($value) . PHP_EOL;

$value = "Banana";
echo first_char($value) . PHP_EOL;
