<?php require_once "../php/config.php"; ?>

<!DOCTYPE html>

<html lang="en">
  <head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <meta charset="utf-8">
    <title>Admin</title>
  </head>
  <body>
    <a class="waves-effect waves-green btn" href="index.php" >Home</a><br>
    <h1>Change password</h1>
    <h2>You are logged in as <?php echo $_SESSION['user']['name']?>.</h2>
    <form method="post" action="../php/reset_info.php">
      <div>Current Password<br><input type='password' name='password' required/></div>
      <div>New Password<br><input type='password' name='newPassword' required/></div>
      <br><input type='submit' value="Change password" />
    </form>
    <br>
    <button><a class="waves-effect waves-green btn" href="protected.php">Home</a></button>

  </body>
</html>
