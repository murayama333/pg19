<?php
$x = (int)filter_input(INPUT_GET, "x");
$y = (int)filter_input(INPUT_GET, "y");
$total = $x + $y;
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHP Sample</title>
</head>
<body>
  <h3>Validation</h3>
  <hr>
  <p><?php echo $total; ?></p>
</body>
</html>
