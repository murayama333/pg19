<?php
$now = date("Y-m-d H:i:s");
setcookie("now", $now);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHP Sample</title>
</head>
<body>
  <h3>Cookie 1</h3>
  <hr>
  <a href="cookie2.php">next page</a>
</body>
</html>
