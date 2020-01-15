<?php
session_start();
$x = $_SESSION["x"];
$y = $_SESSION["y"];
$total = $x + $y;
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHP Sample</title>
</head>
<body>
  <h3>Session x + y</h3>
  <hr>
  <p><?php echo $total; ?></p>
</body>
</html>
