<?php
$dsn = "mysql:host=localhost;dbname=my_company";
$user = "root";
$pass = "admin";
$pdo = new PDO($dsn, $user, $pass);

$sql = "select id, name from department";
$st = $pdo->query($sql);
while ($row = $st->fetch()) {
  echo $row["id"] . ":" . $row["name"] .  PHP_EOL;
}
