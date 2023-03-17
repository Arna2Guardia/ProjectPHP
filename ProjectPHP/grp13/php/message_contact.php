<?php
require_once "config.php";

$email = $_POST['email'];
$name = $_POST['name'];
$firstname = $_POST['firstname'];
$messageContent = $_POST['message'];

$sql = "INSERT INTO message(email,name,firstname,message)
VALUES(:email,:name,:firstname,:message)";

$pre = $pdo->prepare($sql);
$pre->bindParam("email", $_POST['email']);
$pre->bindParam("name", $_POST['name']);
$pre->bindParam("firstname", $_POST['firstname']);
$pre->bindParam("message", $_POST['message']);

$pre->execute();

$answer = "Votre message a bien été envoyé.";

$subject = 'Confirmation';

if(mail($email,$subject,$message)){
    echo 'Vous avez reçu un mail de confirmation';
  } else {
    echo 'Error';
  }

header('Location:../html/index.php');
?>
