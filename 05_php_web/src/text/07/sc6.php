<?php
$pdo = new PDO("mysql:host=localhost;dbname=my_company", "root", "admin");
$sql = "select * from message order by id desc";
$st = $pdo->query($sql);
$messages = $st->fetchAll();

// generate token
$token = hash('sha256', session_id());
?>
<!DOCTYPE html>_
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHP Sample</title>
</head>
<body>
  <h3>CSRF</h3>
  <hr>
  <form action="sc7.php" method="post">
    ID: <input type="text" name="text">
    <input type="hidden" name="token" value="<?= $token ?>">
    <button type="submit">add</button>
  </form>
  <hr>
  <ul>
    <?php foreach ($messages as $message) { ?>
      <li><?= htmlspecialchars($message["text"]) ?></li>
    <?php } ?>
  </ul>
</body>
</html>
