<?php
$a = $_GET["a"];
$b = $_GET["b"];
$c = $_GET["c"];
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHP Sample</title>
</head>
<body>
  <h3>Request - get</h3>
  <hr>
  <?php echo $a ; ?><br>
  <?php echo $b; ?><br>
  <?php echo $c; ?>
</body>
</html>
