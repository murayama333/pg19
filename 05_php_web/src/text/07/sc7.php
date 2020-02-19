<?php
$text = (string)filter_input(INPUT_POST, "text");
$token = (string)filter_input(INPUT_POST, "token");

if ($token !== hash('sha256', session_id())) {
  die("Invalid token.");
}

$pdo = new PDO("mysql:host=localhost;dbname=my_company", "root", "admin");
$sql = "insert into message(text) values(:text)";
$ps = $pdo->prepare($sql);
$ps->bindValue(":text", $text);
$ps->execute();

header("Location: sc6.php");
