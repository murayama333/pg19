<?php
for ($i = 1; $i <= 9; $i++) {
  for ($j = 1; $j <= 9; $j++) {
    $result = $i * $j;
    if ($result % 2 == 0) {
      echo "*";
    } else {
      echo $result;
    }
    echo " ";
  }
  echo PHP_EOL;
}