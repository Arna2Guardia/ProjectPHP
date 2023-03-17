<?php require_once "../php/config.php"; ?>

<!DOCTYPE html>
<html lang="en">

<?php
    $page = "accueil";
    require "../items//head.php";
?>

<body class="grey lighten-1">

  <header>

    <?php
    $page = "accueil";
    require "../items//header.php";
     ?>

  </header>

  <?php
  $sql = "SELECT * FROM index_content";
  $pre = $pdo->prepare($sql);
  $pre->bindParam("id",$_GET['id']);
  $pre->execute();
  $project_content = $pre->fetch(PDO::FETCH_ASSOC);
  ?>


  <div class="parallax-container">
    <div  class="parallax"><img id="bg-parallax" src="<?php echo $project_content['image_1'] ?>" alt=""></div>
     <div>
       <div class="white-text center">
         <h1><?php echo $project_content['title'] ?></h1>
       </div>
     </div>
   </div>
   <div id="page" class="grey darken-4">
     <div class="row" id="us">
      <div class="col s12 m4 offset-m2 l3 offset-l2 ">
        <div class="card">
          <div class="card-image waves-effect waves-block waves-light">
            <img id="ape-lucas" class="activator" src="<?php echo $project_content['image_2'] ?>" alt="">
          </div>
          <div class="card-content grey darken-4">
            <span class="titles card-title activator white-text"><?php echo $project_content['subtitle_1'] ?><i class="material-icons right">more_vert</i></span>
          </div>
          <div class="card-reveal grey darken-4 white-text">
            <span class="titles card-title grey darken-4 white-text"><a class="grey-text text-lighten-3" href="https://www.linkedin.com" rel="nofollow" target="_blank">Lucas</a><i class="material-icons right">close</i></span>
            <ul>
              <li class="text-card"><p><?php echo $project_content['text_1'] ?></p></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col s2 m2 l2"></div>
        <div class="col s12 m4 offset-m1 l3 ">
          <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
              <img id="matthieu" class="activator" src="<?php echo $project_content['image_3'] ?>" alt="">
            </div>
            <div class="card-content grey darken-4">
              <span class="titles card-title activator white-text"><?php echo $project_content['subtitle_2'] ?><i class="material-icons right">more_vert</i></span>
            </div>
            <div class="card-reveal grey darken-4 white-text">
            <span class="titles card-title grey darken-4 white-text"><a class="grey-text text-lighten-3" href="https://www.linkedin.com/" rel="nofollow" target="_blank">Matthieu</a><i class="material-icons right">close</i></span>
              <ul>
                <li class="text-card"><p><?php echo $project_content['text_2'] ?></p></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

<?php
  $page = "accueil";
  require "../items/carousel.php";
  ?>



<?php
  $page = "accueil";
  require "../items//message_form.php";
?>

<?php
  $page = "accueil";
  require "../items/modal_signin.php";
 ?>

<?php
    $page = "accueil";
    require "../items/footer.php";
?>


<?php
    $page = "accueil";
    require "../items/script.php";
     ?>

  </body>
</html>
