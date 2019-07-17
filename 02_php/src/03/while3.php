<?php
$i = 1;
while ($i <= 9) {
  $j = 1;
  while ($j <= 9) {
    echo $i * $j;
    echo " ";
    $j++;
  }
  echo PHP_EOL;
  $i++;
}
