<?php
session_start();
$_SESSION["x"] = 100;
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHP Sample</title>
</head>
<body>
  <h3>Session x = 100</h3>
  <hr>
  <a href="session_ex2.php">next page</a>
</body>
</html>
