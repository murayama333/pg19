<?php
$pdo = new PDO("mysql:host=localhost;dbname=my_company", "root", "admin");

$sql = "select * from staff order by id desc";
$st = $pdo->query($sql);
$rows = $st->fetchAll();
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHP Sample</title>
</head>
<body>
  <h3>Staff</h3>
  <hr>
  <table border="1">
    <tr>
      <th>id</th>
      <th>name</th>
      <th>job</th>
      <th>hire_date</th>
      <th>sal</th>
      <th>manager_id</th>
      <th>department_id</th>
    </tr>
    <?php foreach ($rows as $row) { ?>
    <tr>
      <td><?php echo $row["id"]; ?></td>
      <td><?php echo $row["name"]; ?></td>
      <td><?php echo $row["job"]; ?></td>
      <td><?php echo $row["hire_date"]; ?></td>
      <td><?php echo $row["sal"]; ?></td>
      <td><?php echo $row["manager_id"]; ?></td>
      <td><?php echo $row["department_id"]; ?></td>
    </tr>
    <?php } ?>
  </table>
</body>
</html>
