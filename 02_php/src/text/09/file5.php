<?php
$file = "xxx.txt";
$handle = @fopen($file, "r");
if ($handle === false) {
  die("File is not opened.")
}

$line = fgets($handle);
while ($line !== false) {
  echo $line;
  $line = fgets($handle);
}

fclose($handle);
