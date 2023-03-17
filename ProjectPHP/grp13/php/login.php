<?php
require_once "config.php";

$sql = "SELECT * FROM user WHERE email = :email";
$pre = $pdo->prepare($sql);
$pre->bindParam("email", $_POST['email']);
$pre->execute();
$user = $pre->fetch(PDO::FETCH_ASSOC);


if(empty($user)){
  echo 'no user';
}
else {
  if(password_verify($_POST['password'], $user['password'])){
      $_SESSION['user'] = $user;

      echo "ok";

  }else{

    echo "notok";
  }


}
header('Location:../html/index.php');



//header('Location:../html/protected.php');//on le redirige sur la page d'accueil du site !
?>
