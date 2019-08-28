<?php
$protocol = "hyper text transfer protocol";
$result = strtoupper($protocol);
$result = explode(" ", $result);
for ($i=0; $i < count($result); $i++) {
  echo substr($result[$i], 0, 1);
}
echo PHP_EOL;
