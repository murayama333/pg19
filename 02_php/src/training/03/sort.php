<?php
$ages = [22, 20, 20, 25, 18];
for ($i = 0; $i < count($ages) - 1; $i++) {
  for ($j = 0; $j < count($ages) - 1; $j++) {
    if ($ages[$j] > $ages[$j + 1]) {
      $tmp = $ages[$j];
      $ages[$j] = $ages[$j + 1];
      $ages[$j + 1] = $tmp;
    }
  }
}
print_r($ages);