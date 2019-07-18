<?php
for ($i = 1; $i <= 9; $i++) {
  for ($j = 1; $j <= $i; $j++) {
    echo $i * $j;
    echo " ";
  }
  echo PHP_EOL;
}