<?php

$title = "Mi portafolio";

$portafolio = getProjects();

?>

<section id="portfolio">
  <div class="container">
    <h2 class="text-center"><?= $title ?></h2>
    <hr class="star-primary">
    <div class="row">
      <?php foreach($portafolio as $item): ?>
        <div class="col-sm-4 portfolio-item">
          <a class="portfolio-link" href="<?php echo $item['link'] . "?id=". $item['id'] ?>" >
            <div class="caption">
              <div class="caption-content">
                <i class="fa fa-search-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="<?php echo $item['img'] ?>" alt="">
          </a>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
