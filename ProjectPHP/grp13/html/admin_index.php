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
    <?php require_once "../php/config.php"; ?>
    <div>
      <button><a  href="admin_projects.php" >Manage projects</a></button>
      <button><a  href="panel_admin.php" >Manage users</a></button>
      <button><a  href="index.php" >Home</a></button>
    <div>
      <h2>Modify the index</h2>
      <?php
      $sql = "SELECT * FROM index_content";
      $stmt = $pdo->prepare($sql);
      $stmt->execute();
      $index_content = $stmt->fetch();
      ?>
      <form action="../php/modify_index.php" method="post" enctype='multipart/form-data'>
        <input type="text" name="title" value="<?php echo $index_content['title']?>" placeholder="Title">Title</input><br>
        <input type="file" name="image_1" value="<?php echo $index_content['image_1']; ?>">Background</input><br>
        <input type="file" name="image_2" value="<?php echo $index_content['image_2']; ?>">Picture 1</input><br>
        <input type="file" name="image_3" value="<?php echo $index_content['image_3']; ?>">Picture 2</input><br>
        <input type= "text" name="subtitle_1" placeholder="Name 1" value="<?php echo $index_content['subtitle_1']?>"></input><br>
        <input type= "text" name="subtitle_2" placeholder="Name 2" value="<?php echo $index_content['subtitle_2']?>"></input><br>
        <input type= "text" name="subtitle_3" placeholder="Our projects" value="<?php echo $index_content['subtitle_3']?>"></input><br>
        <input type="text" name="text_1" placeholder="Description 1" value="<?php echo $index_content['text_1']?>" ></input></br>
        <input type="text" name="text_2" placeholder="Description 2" value="<?php echo $index_content['text_2']?>" ></input></br>
        <input type="hidden" name="id_index_content" value="<?php echo $index_content['id_index_content']; ?>">
        <button type="submit" name="button">Modifier</button>
      </form>
      <br>
    </body>
  </html>
