<?php

require_once "config.php";

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$passwordHash = password_hash($password, PASSWORD_BCRYPT);

$sql = "INSERT INTO user (name,email,password) VALUES(:name,:email,:password)";

$pre = $pdo->prepare($sql);
$pre->bindParam('name',htmlspecialchars($_POST['name'], ENT_QUOTES,'UTF_8'));

$pre->bindParam("email", $_POST['email']);
$pre->bindParam("password", $passwordHash);
$pre->execute();


header ('Location:../html/index.php');
?>
