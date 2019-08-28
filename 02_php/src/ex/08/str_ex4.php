<?php
$protocol = "hyper text transfer protocol";
$result = explode(" ", $protocol);
for ($i=0; $i < count($result); $i++) {
  echo $result[$i] . PHP_EOL;
}
