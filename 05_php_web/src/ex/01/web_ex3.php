<?php
$file = "cities.csv";
$fp = fopen($file, "r");
$cities = [];
$line = fgets($fp);
while ($line !== false) {
  $array = explode(",", $line);
  $cities[] = $array;
  $line = fgets($fp);
}
fclose($fp);
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
  <table border="1">
    <?php for ($i = 0; $i < count($cities); $i++) { ?>
      <tr>
        <td><?php echo $cities[$i][0]; ?></td>
        <td><?php echo $cities[$i][1]; ?></td>
        <td><?php echo $cities[$i][2]; ?></td>
      </tr>
    <?php } ?>
  </table>
</body>
</html>
