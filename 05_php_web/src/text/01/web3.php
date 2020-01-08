<?php
$cities = ["Osaka", "Hirakata", "Sakai"];
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHP Sample</title>
</head>
<body>
  <h3>List</h3>
  <hr>
  <ul>
    <?php for ($i = 0; $i < count($cities); $i++) { ?>
      <li><?php echo $cities[$i]; ?></li>
    <?php } ?>
  </ul>
</body>
</html>
