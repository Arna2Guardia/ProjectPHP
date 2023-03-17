<?php require "config.php";



$sql ="DELETE FROM user WHERE id_user = :id_user;";

$pre = $pdo->prepare($sql);
$pre->bindParam('id_user',$_POST['id_user']);

$pre->execute();

header('Location: ../html/panel_admin.php');


?>
