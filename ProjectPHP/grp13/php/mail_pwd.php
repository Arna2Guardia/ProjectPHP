<?php

$email = $_SESSION['user']['email'];
$subject = 'Password confirmation';
$message = 'Your password has been changed.';

if(mail($email,$subject,$message)){
  echo 'Vous avez reçu un mail de confirmation';
} else {
  echo 'Error';
}

?>
