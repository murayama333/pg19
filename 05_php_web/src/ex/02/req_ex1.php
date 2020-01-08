<?php
$a = $_GET["a"];
$b = $_GET["b"];
$answer = $a + $b;
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHP Sample</title>
</head>
<body>
  <h3>Calc</h3>
  <hr>
  <p><?php echo $answer; ?></p>
</body>
</html>
