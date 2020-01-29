<?php
$x = $_POST["x"];
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHP Sample</title>
</head>
<body>
  <h3>Script Injection</h3>
  <hr>
  <p><?php echo htmlspecialchars($x, ENT_QUOTES); ?></p>
</body>
</html>
