<?php
$ages = [22, 20, 25, 20, 18];
$total = 0;
for ($i = 0; $i < count($ages); $i++) {
  $total += $ages[$i];
}
echo $total;