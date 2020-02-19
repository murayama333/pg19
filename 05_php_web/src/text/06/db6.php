<?php
try {
  $pdo = new PDO('mysql:host=localhost;dbname=my_company', 'root', 'admin');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sql = "select id, name from departmenttt";
  $st = $pdo->query($sql);
  $rows = $st->fetchAll();
  foreach ($rows as $row) {
    echo $row["id"] . ":" . $row["name"] .  PHP_EOL;
  }
  echo "1" . PHP_EOL;
} catch (PDOException $e) {
  echo "2" . PHP_EOL;
  echo $e->getMessage() . PHP_EOL;
}

echo "3" . PHP_EOL;