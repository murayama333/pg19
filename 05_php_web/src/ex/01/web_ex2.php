<?php
$file = "cities.txt";
$cities = file($file, FILE_IGNORE_NEW_LINES);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHP Sample</title>
</head>
<body>
  <h3>Cities</h3>
  <hr>
  <ol>
    <?php for ($i = 0; $i < count($cities); $i++) { ?>
      <li><?php echo $cities[$i]; ?></li>
    <?php } ?>
  </ol>
</body>
</html>
