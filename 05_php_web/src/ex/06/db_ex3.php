<?php
$id = $_POST["id"];
$name = $_POST["name"];
$job = $_POST["job"];
$hire_date = $_POST["hire_date"];
$sal = $_POST["sal"];
$manager_id = $_POST["manager_id"];
$department_id = $_POST["department_id"];
$pdo = new PDO("mysql:host=localhost;dbname=my_company", "root", "admin");

$sql = "insert into staff values(?, ?, ?, ?, ?, ?, ?)";
$ps = $pdo->prepare($sql);
$ps->bindValue(1, $id);
$ps->bindValue(2, $name);
$ps->bindValue(3, $job);
$ps->bindValue(4, $hire_date);
$ps->bindValue(5, $sal);
$ps->bindValue(6, $manager_id);
$ps->bindValue(7, $department_id);
$ps->execute();
header("Location: db_ex2.php");
