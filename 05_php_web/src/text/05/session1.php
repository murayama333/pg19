<?php
session_start();
$now = date("Y-m-d H:i:s");
$_SESSION["now"] = $now;
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHP Sample</title>
</head>
<body>
  <h3>Session 1</h3>
  <hr>
  <a href="session2.php">next page</a>
</body>
</html>
