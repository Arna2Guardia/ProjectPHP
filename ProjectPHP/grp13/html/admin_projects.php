<?php require_once "../php/config.php"; ?>
<?php
if ($_SESSION['user']['admin']==0){
  header('Location:protected.php');
}
?>

<!DOCTYPE html>

<html lang="en">
  <head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <!--<link type="text/css" rel="stylesheet" href="../css/materialize.css"/>-->
    <link rel="stylesheet" href = "../css/csspanel.css">

    <meta charset="utf-8">
    <title>Admin</title>
  </head>
  <body>
    <div>
      <button><a  href="admin_index.php" >Manage index</a></button>
      <button><a  href="panel_admin.php" >Manage users</a></button>
      <button><a  href="index.php" >Home</a></button>
    <div>
      <h2>Add a project</h2>
      <form action="../php/add_project.php" method="post" enctype="multipart/form-data">
        <input type="text" name="title" value="" placeholder="Title" required</input><br>
        <input type="file" name="image_1" required></input><br>
        <textarea name="text_1" rows="8" cols="60" placeholder="Main description"></textarea><br>
        <input type="file" name="image_2"></input><br>
        <input type="file" name="image_3"></input><br>
        <input type="file" name="image_4"></input><br>
        <textarea name="text_2" rows="8" cols="60" placeholder="Additional description"></textarea><br>
        <button type="submit" name="button">Ajouter</button>
      </form>
      <br>

      <div>
        <?php
          $sql = "SELECT * FROM project_content";
          $pre = $pdo->prepare($sql);
          $pre->execute();
          $projects = $pre->fetchAll(PDO::FETCH_ASSOC);

          foreach($projects as $project){ ?>
            <div>
              <h2><?php echo "Projet n°".$project['id_project_content']." - ".$project['title'] ?></h2>
              <img src="<?php echo $project['image_1']?>" alt="">
              <form action="../php/delete_project.php" method="post">
                <input type="hidden" name="id_project_content" value="<?php echo $project['id_project_content']?>">
                <button type="submit" name="button_delete" onclick="return confirm('Êtes-vous sûr de vouloir supprimer le projet <?php echo $project['title'] ?> ?')">Delete</button>
              </form>
            </div>

          <?php } ?>
        </div>




  </body>
</html>
