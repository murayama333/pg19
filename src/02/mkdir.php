<?php
$names = ["Apple", "Banana", "Cherry"];

for ($i = 0; $i < 3; $i++) {
  mkdir($names[$i]);
}