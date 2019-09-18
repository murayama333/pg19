<?php
$array = ["Central  ", "   Processing", "  Unit   "];

$str = "";
foreach ($array as $elem) {
  $str .= trim($elem);
}
echo $str . PHP_EOL;
