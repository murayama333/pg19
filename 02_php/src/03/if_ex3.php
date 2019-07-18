<?php
$id = "Alice";
$password = "pass";

echo "USER ID:$id" . PHP_EOL;
echo "PASSWORD:$password" . PHP_EOL;

if ($id === "Alice" && $password === "pass") {
  echo "Success";
} else {
  echo "Error";
}
