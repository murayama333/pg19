<?php
$id = (string)filter_input(INPUT_POST, "id");
$pass = (string)filter_input(INPUT_POST, "pass");

$pdo = new PDO("mysql:host=localhost;dbname=my_company", "root", "admin");
$sql = "select * from account where id = :id";
$st = $pdo->prepare($sql);
$st->bindValue(":id", $id);
$st->execute();
$account = $st->fetch();

if ($account === false) {
  die("Inalid ID.");
}

if (password_verify($pass, $account["hashed_password"]) === false) {
  die("Invalid password.");
}

session_start();
session_regenerate_id();

$_SESSION["id"] = $id;
header("Location: sc6.php");
