<?php
for ($i = 1; $i <= 9; $i++) {
  for ($j = 1; $j <= 9; $j++) {
    if ($j % 2 == 0) {
      echo "*";
    } else {
      echo $i * $j;
    }
    echo " ";
  }
  echo PHP_EOL;
}