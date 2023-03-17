<?php
require_once "config.php";

if (!isset($_SESSION['user']['id_user']) || !isset($_SESSION['user']['password'])) {
  exit;
}

$currentPassword = $_POST['password'];
$newPassword = $_POST['newPassword'];

$sql = "SELECT password FROM user WHERE id_user = :id_user";
$pre = $pdo->prepare($sql);
$pre->bindParam("id_user", $_SESSION['user']['id_user']);
$pre->execute();
$user = $pre->fetch(PDO::FETCH_ASSOC);

if (!password_verify($currentPassword, $user['password'])) {
  echo "Invalid current password";
  exit;
}

$passwordHash = password_hash($newPassword, PASSWORD_BCRYPT);

$sql2 = "UPDATE user SET password = :newPassword WHERE id_user = :id_user";
$pre2 = $pdo->prepare($sql2);
$pre2->bindParam('newPassword', $passwordHash);
$pre2->bindParam('id_user', $_SESSION['user']['id_user']);

$pre2->execute();

echo "password changed";
require "mail_pwd.php";

header('Location:../html/index.php')

?>
