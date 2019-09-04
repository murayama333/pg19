<?php
$file = "number.txt";
$handle = fopen($file, "w");
for ($i = 1; $i <= 10; $i++) {
  fwrite($handle, $i . PHP_EOL);
}
fclose($handle);