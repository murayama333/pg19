<?php
$id = $_POST["id"];
$pass = $_POST["pass"];
if ($id == "john" && $pass == "secret") {
  header("Location: menu.php");
} else {
  header("Location: login.html");
}
