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
    <link type="text/css" rel="stylesheet" href="../css/materialize.css"/>
    <link rel="stylesheet" href = "../css/csspanel.css">

    <meta charset="utf-8">
    <title>Admin</title>
  </head>
  <body>
    <div>
      <a class="waves-effect waves-green btn" href="admin_index.php" >Manage index</a>
      <a class="waves-effect waves-green btn" href="admin_projects.php" >Manage projects</a>
      <a class="waves-effect waves-green btn" href="index.php" >Home</a>
    </div>
    <table>
        <thead>
            <tr>
                <h1 colspan="2">Liste des utilisateurs</h1>
            </tr>
        </thead>
        <tbody>
          <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Email</td>
            <td>Sign-up date</td>
            <td>Admin</td>
          </tr>

          <?php
            $sql = "SELECT * FROM user";
            $pre = $pdo->prepare($sql);
            $pre->execute();
            $data = $pre->fetchAll(PDO::FETCH_ASSOC);

            foreach($data as $user){ ?>
              <tr class='table_admin'>
                <td><?= $user['id_user'] ?></td>
                <td><?= $user['name'] ?></td>
                <td><?= $user['email'] ?></td>
                <td><?= $user['sign_up_date'] ?></td>
                <td><?= $user['admin'] ?></td>
                <td>
                  <form action="../php/delete_user.php" method="post">
                    <input type="hidden" name="id_user" value="<?php echo $user['id_user']?>">
                    <button type="submit" name="button_delete" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce compte utilisateur ?')">Delete</button>
                  </form>
                </td>
                <td>
                  <form action="../php/modify_user.php" method="post">
                    <input type="hidden" name="id_user" value="<?php echo $user['id_user']?>">
                    <input type="hidden" name="admin" value="<?php echo $user['admin'] == 1?0:1 ?>">
                    <button type="submit" name="button">Switch User</button>
                  </form>
                </td>
              </tr>
         <?php } ?>
        </tbody>
    </table>
    <br>

  </body>
</html>
