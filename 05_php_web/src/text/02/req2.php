<?php
$a = $_POST["a"];
$b = $_POST["b"];
$c = $_POST["c"];
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHP Sample</title>
</head>
<body>
  <h3>Request - post</h3>
  <hr>
  <?php echo $a ; ?><br>
  <?php echo $b; ?><br>
  <?php echo $c; ?>
</body>
</html>
