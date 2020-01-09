<?php
$date = date("Y-m-d H:i:s");
header("Content-Type: text/plain");
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHP Sample</title>
</head>
<body>
  <h3>Date</h3>
  <hr>
  <p><?php echo $date; ?></p>
</body>
</html>
