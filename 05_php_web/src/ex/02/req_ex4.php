<?php
$city = $_GET["city"];

$file = "cities.txt";
$cities = file($file, FILE_IGNORE_NEW_LINES);

$message = "NG";
for ($i = 0; $i < count($cities); $i++) {
  if ($city == $cities[$i]) {
    $message = "OK";
    break;
  }
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHP Sample</title>
</head>
<body>
  <h3>Search</h3>
  <hr>
  <p><?php echo $message; ?></p>
</body>
</html>
