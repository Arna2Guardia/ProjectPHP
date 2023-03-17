<?php require_once "../php/config.php"; ?>

<!DOCTYPE html>
<html lang="en">
<?php
    $page = "accueil";
    require "../items/head.php";
?>

<body>

<header>

  <?php
    $page = "project";
    require "../items/header.php";
     ?>

  </header>

  <?php
  $sql = "SELECT * FROM project_content WHERE id_project_content=:id_project_content";
  $pre = $pdo->prepare($sql);
  $pre->bindParam("id_project_content",$_GET['id_project_content']);
  $pre->execute();
  $project_content = $pre->fetch(PDO::FETCH_ASSOC);
  ?>

    <div class='container'>
      <h1 class='h1-p1 black-text'><?php echo $project_content['title'] ?></h1>
      <div class='row'>
        <div class='center'>
          <img id="img_1" src='<?php echo $project_content['image_1'] ?>' alt = ''>
        </div>
        <p class='col s12 m10 l10 offset-l1 offset-m1 h1-p'><?php echo $project_content['text_1'] ?></p>
      </div>
      <div class='space'></div>
      <div class='row'>
        <div class='center'>
          <img src='<?php echo $project_content['image_2'] ?>' alt=''>
          <img src='<?php echo $project_content['image_3'] ?>' alt =''>
          <img src='<?php echo $project_content['image_4'] ?>' alt =''>
        </div>
        <div class='col s12 m6 l6 offset-m6 offset-l3 h1-p'>
          <p><?php echo $project_content['text_2'] ?></p>
        </div>
      </div>
    </div>

<?php
      $page = "accueil";
      require "../items/modal_signin.php";
  ?>

<?php
  $page = "accueil";
  require "../items/message_form.php";
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
