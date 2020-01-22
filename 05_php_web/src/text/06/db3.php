<?php
$pdo = new PDO('mysql:host=localhost;dbname=my_company', 'root', 'admin');
$sql = "insert into department(id, name) values(5, 'Human Resources')";
$count = $pdo->exec($sql);
echo $count . PHP_EOL;
