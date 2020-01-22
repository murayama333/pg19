<?php
$departments = [
  ["id" => 1, "name" => "Development"],
  ["id" => 2, "name" => "Sales"],
  ["id" => 3, "name" => "Accounting"],
  ["id" => 4, "name" => "Legal"],
];

$pdo = new PDO('mysql:host=localhost;dbname=my_company', 'root', 'admin');

$sql = "insert into department(id, name) values(?, ?)";
$ps = $pdo->prepare($sql);
foreach ($departments as $department) {
  $ps->bindValue(1, $department["id"]);
  $ps->bindValue(2, $department["name"]);
  $ps->execute();
}
