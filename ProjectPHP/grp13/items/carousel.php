<div class="bg-carousel blue-grey darken-4 ">
  <div class=row>
    <div class="titles col s12 m4 offset-m4 l7 offset-l5 white-text">
      <h2><?php echo $project_content['subtitle_3'] ?></h2>
    </div>
    <div class="carousel s12 m4 offset-m4 l7 offset-l2">
      <?php
        $sql = "SELECT * FROM project_content";
        $pre = $pdo->prepare($sql);
        $pre->execute();
        $projects = $pre->fetchAll(PDO::FETCH_ASSOC);

        foreach($projects as $project){ ?>
          <a class="carousel-item" href="project.php?id_project_content=<?php echo $project['id_project_content']?>">
            <img id="mario" src="<?php echo $project['image_1']?>" alt="">
          </a>
        <?php } ?>

    </div>
  </div>
</div>
