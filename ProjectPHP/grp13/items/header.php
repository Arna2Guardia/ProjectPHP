<?php require_once "../php/config.php"; ?>


<nav id="nav" class = "grey darken-4">
        <div class="nav-wrapper">
          <a href="https://guardia.school" rel="nofollow" target="_blank" class="brand-logo"><img id="logo-g" src="../img/guardia_logo.png" alt="Guardia Cybersecuritty School's logo"></a>
          <a href="#" data-target="mobile-demo" class="class-nav sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul>
              <?php if(!isset($_SESSION['user'])) : ?>
                <li class="right hide-on-med-and-down "><a  class="class-nav modal-trigger" href="#modal2"><i class= "material-icons">person</i></a></li>
              <?php else: ?>
                <li class="right hide-on-med-and-down">
                  <a class="waves-effect waves-green btn" href="../php/logout.php" >Logout</a>
                </li>
              <?php endif; ?>
              <?php if(isset($_SESSION['user'])) : ?>
                <?php if ($_SESSION['user']['admin'] == 1): ?>
                  <li class="right hide-on-med-and-down">
                    <a class="waves-effect waves-green btn" href="panel_admin.php" >Panel Admin</a>
                  </li>
                <?php else: ?>
                  <li class="right hide-on-med-and-down">
                    <a class="waves-effect waves-green btn" href="panel_user.php" >Panel User</a>
                  </li>
                <?php endif; ?>
              <?php endif; ?>
                <li class="right switch right hide-on-med-and-down">
                    <label id="mylbl" >
                      <input type="checkbox" onclick="light_mode()">
                        <span class="lever" ></span>
                    </label>
                </li>
                <li class="right hide-on-med-and-down "><a  class="class-nav modal-trigger" href="#modal1"><i class= "material-icons">chat</i></a></li>
                <?php
                  $sql = "SELECT * FROM project_content";
                  $pre = $pdo->prepare($sql);
                  $pre->execute();
                  $projects = $pre->fetchAll(PDO::FETCH_ASSOC);

                  foreach($projects as $project){ ?>
                    <li class="right hide-on-med-and-down "><a  class="class-nav white-text waves-light" href="../html/project.php?id_project_content=<?php echo $project['id_project_content']?>">Project<?php echo $project['id_project_content']?> </a></li>
                  <?php } ?>
                <li class="right hide-on-med-and-down "><a  class="class-nav white-text waves-light" href="index.php">Home</a></li>
            </ul>
        </div>
      </nav>
    </header>
