<?php
$departments = [
  ["id" => 1, "name" => "Development"],
  ["id" => 2, "name" => "Sales"],
  ["id" => 3, "name" => "Accounting"],
  ["id" => 4, "name" => "Legal"],
];

$pdo = new PDO('mysql:host=localhost;dbname=my_company', 'root', 'admin');
$pdo->beginTransaction();
$sql = "insert into department(id, name) values(:id, :name)";
$ps = $pdo->prepare($sql);
foreach ($departments as $department) {
  $ps->bindValue(":id", $department["id"], PDO::PARAM_INT);
  $ps->bindValue(":name", $department["name"], PDO::PARAM_STR);
  $ps->execute();
}

$pdo->rollback();
// $pdo->commit();
