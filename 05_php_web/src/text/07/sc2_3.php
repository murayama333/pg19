<?php
$name = $_GET["name"];

$pdo = new PDO("mysql:host=localhost;dbname=my_company", "root", "admin");
$sql = "select id, name, sal from staff where name = :name";
$st = $pdo->prepare($sql);
$st->bindValue(":name", $name);
$st->execute();
$staffs = $st->fetchAll();
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHP Sample</title>
</head>
<body>
  <h3>SQL Injection</h3>
  <hr>
  <?php foreach ($staffs as $staff): ?>
    <dl>
      <dt>ID</dt>
      <dd><?php echo $staff["id"]; ?></dd>
      <dt>NAME</dt>
      <dd><?php echo $staff["name"]; ?></dd>
      <dt>SAL</dt>
      <dd><?php echo $staff["sal"]; ?></dd>
    </dl>
  <?php endforeach; ?>
</body>
</html>
