<?php
session_start();
$now = $_SESSION["now"];
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHP Sample</title>
</head>
<body>
  <h3>Session 2</h3>
  <hr>
  <p><?php echo $now; ?></p>
</body>
</html>
