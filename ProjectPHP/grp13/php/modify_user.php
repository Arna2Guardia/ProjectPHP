<?php require "config.php";



$sql = 'UPDATE user SET admin=:admin WHERE id_user=:id_user';
$pre = $pdo->prepare($sql);
$pre->bindParam('id_user',$_POST['id_user']);
$pre->bindParam('admin',$_POST['admin']);
$pre->execute();

header("Location: ../html/panel_admin.php");
?>
