<?php require "config.php";



$sql ="DELETE FROM project_content WHERE id_project_content = :id_project_content;";

$pre = $pdo->prepare($sql);
$pre->bindParam('id_project_content',$_POST['id_project_content']);

$pre->execute();

header('Location: ../html/admin_projects.php');


?>
