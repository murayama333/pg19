<?php
$text = filter_input(INPUT_POST, "text");
if (mb_strlen($text) > 140) {
  die("Input data is too long.");
}

if (!preg_match("/^[a-zA-Z0-9 \.]+$/", $text)) {
  die("Only alphanumeric characters can be used.");
}

$pdo = new PDO("mysql:host=localhost;dbname=my_company", "root", "admin");
$sql = "insert into message(text) values(:text)";
$st = $pdo->prepare($sql);
$st->bindValue(":text", $text);
$st->execute();

header("Location: bbs.php");
