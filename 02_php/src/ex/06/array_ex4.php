<?php
$ages = [22, 20, 25, 20, 18];
$max = 0;
for ($i = 0; $i < count($ages); $i++) {
  if ($max < $ages[$i]) {
    $max = $ages[$i];
  }
}
echo $max;