<?php
function abbreviate($str) {
  $array = explode(" ", $str);
  $result = "";
  foreach ($array as $value) {
    $result .= substr($value, 0, 1);
  }
  return $result;
}

$value = "Hyper Text Markup Language";
echo abbreviate($value) . PHP_EOL;

$value = "Structured Query Language";
echo abbreviate($value) . PHP_EOL;
