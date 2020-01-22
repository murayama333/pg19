<?php
$pdo = new PDO("mysql:host=localhost;dbname=my_company", "root", "admin");

$sql = "select * from staff order by id";
$st = $pdo->query($sql);
$rows = $st->fetchAll();
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHP Sample</title>
</head>
<body>
  <h3>Staff</h3>
  <hr>
  <ul>
  <?php foreach ($rows as $row) { ?>
    <li><?php echo $row["name"]; ?></li>
  </tr>
  <?php } ?>
  </ul>
</body>
</html>
