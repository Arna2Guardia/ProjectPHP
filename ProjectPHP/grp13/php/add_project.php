<?php require "config.php";

move_uploaded_file($_FILES['image_1']['tmp_name'],"../img/".$_FILES['image_1']['name']);
move_uploaded_file($_FILES['image_2']['tmp_name'],"../img/".$_FILES['image_2']['name']);
move_uploaded_file($_FILES['image_3']['tmp_name'],"../img/".$_FILES['image_3']['name']);
move_uploaded_file($_FILES['image_4']['tmp_name'],"../img/".$_FILES['image_4']['name']);

$image_1 = "../img/".$_FILES['image_1']['name'];
$image_2 = "../img/".$_FILES['image_2']['name'];
$image_3 = "../img/".$_FILES['image_3']['name'];
$image_4 = "../img/".$_FILES['image_4']['name'];

$sql = "INSERT INTO project_content(image_1,image_2,image_3,image_4,title,text_1,text_2)
VALUES (:image_1,:image_2,:image_3,:image_4,:title,:text_1,:text_2)";

$pre = $pdo->prepare($sql);
$pre->bindParam("image_1", $image_1);
$pre->bindParam("image_2", $image_2);
$pre->bindParam("image_3", $image_3);
$pre->bindParam("image_4", $image_4);
$pre->bindParam("title", $_POST['title']);
$pre->bindParam("text_1", $_POST['text_1']);
$pre->bindParam("text_2", $_POST['text_2']);


$pre->execute();

header('Location:../html/admin_projects.php');


?>
