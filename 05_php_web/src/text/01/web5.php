<?php
$cities = [["Osaka", "Hirakata", "Sakai"],
           ["Kobe", "Amagasaki", "Itami"]];
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHP Sample</title>
</head>
<body>
  <h3>Table</h3>
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
