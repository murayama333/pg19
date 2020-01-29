<?php
$id = (string)filter_input(INPUT_POST, "id");
$pass = (string)filter_input(INPUT_POST, "pass");

$hashed_password = password_hash($pass, PASSWORD_BCRYPT);

$pdo = new PDO("mysql:host=localhost;dbname=my_company", "root", "admin");
$sql = "insert into account values(:id, :hashed_password)";
$st = $pdo->prepare($sql);
$st->bindValue(":id", $id);
$st->bindValue(":hashed_password", $hashed_password);
$st->execute();

header("Location: sc5.html");
