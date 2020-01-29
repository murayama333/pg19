<?php
$pdo = new PDO("mysql:host=localhost;dbname=my_company", "root", "admin");
$sql = "select * from message order by id desc";
$st = $pdo->query($sql);
$messages = $st->fetchAll();
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHP Sample</title>
</head>
<body>
  <h3>MY BBS</h3>
  <hr>
  <form action="bbs_post.php" method="post">
    MESSAGE: <input type="text" name="text">
    <button type="submit">post</button>
  </form>
  <ul>
    <?php
    foreach ($messages as $message) { ?>
      <li><?php echo htmlspecialchars($message["text"], ENT_QUOTES) . " : " . $message["created_at"];?></li>
    <?php } ?>
  </ul>
</body>
</html>
