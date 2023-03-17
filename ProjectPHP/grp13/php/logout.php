<?php
require_once "../php/config.php";

session_destroy();
echo "Vous etes bien déconnectes";

header('Location:../html/index.php');

 ?>
