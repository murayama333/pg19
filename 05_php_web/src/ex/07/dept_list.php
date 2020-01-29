<?php
$pdo = new PDO("mysql:host=localhost;dbname=my_company", "root", "admin");
$sql = "select * from department order by id";
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
  <h3>Department</h3>
  <hr>
  <form action="dept_post.php" method="post">
    ID: <input type="number" name="id">
    NAME: <input type="text" name="name">
    <button type="submit">save</button>
  </form>
  <hr>
  <table border="1">
    <tr>
      <th>ID</th>
      <th>NAME</th>
    </tr>
    <?php
    foreach ($rows as $row) { ?>
      <tr>
        <td><?php echo htmlspecialchars($row["id"], ENT_QUOTES); ?></td>
        <td><?php echo htmlspecialchars($row["name"], ENT_QUOTES); ?></td>
      </tr>
    <?php } ?>
  </table>
</body>
</html>
