<?php
$id = $_POST["id"];
$pass = $_POST["pass"];
$message = "NG";
if ($id == "john" && $pass == "secret") {
  $message = "OK";
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHP Sample</title>
</head>
<body>
  <h3>Login</h3>
  <hr>
  <p><?php echo $message; ?></p>
</body>
</html>
