<?php
$id = (int)filter_input(INPUT_POST, "id");
$name = (string)filter_input(INPUT_POST, "name");

if (mb_strlen($id) > 5) {
  die("Input data is too long. - id");
}

if (!preg_match("/^[0-9]+$/", $id)) {
  die("Only alphanumeric characters can be used. - id");
}

if (mb_strlen($name) > 100) {
  die("Input data is too long. - name");
}

echo $name;
if (!preg_match("/^[a-zA-Z0-9 \.]+$/", $name)) {
  die("Only alphanumeric characters can be used. - name");
}

$pdo = new PDO("mysql:host=localhost;dbname=my_company", "root", "admin");
$sql = "insert into department(id, name) values(:id, :name)";
$st = $pdo->prepare($sql);
$st->bindValue(":id", $id);
$st->bindValue(":name", $name);
$st->execute();

header("Location: dept_list.php");
