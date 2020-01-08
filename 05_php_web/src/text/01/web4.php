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
    <tr>
      <td><?php echo $cities[0][0]; ?></td>
      <td><?php echo $cities[0][1]; ?></td>
      <td><?php echo $cities[0][2]; ?></td>
    </tr>
    <tr>
      <td><?php echo $cities[1][0]; ?></td>
      <td><?php echo $cities[1][1]; ?></td>
      <td><?php echo $cities[1][2]; ?></td>
    </tr>
  </table>
</body>
</html>
