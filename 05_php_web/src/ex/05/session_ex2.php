<?php
session_start();
$_SESSION["y"] = 200;
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHP Sample</title>
</head>
<body>
  <h3>Session y = 200</h3>
  <hr>
  <a href="session_ex3.php">next page</a>
</body>
</html>
