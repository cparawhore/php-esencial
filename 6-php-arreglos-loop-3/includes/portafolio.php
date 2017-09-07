<?php

// $item1 = [
//   'link' => 'proyecto.php',
//   'img' => 'img/portfolio/cabin.png'
// ]
//
// $item2 = [
//   'link' => 'proyecto.php',
//   'img' => 'img/portfolio/cake.png'
// ]
//
// $item3 = [
//   'link' => 'proyecto.php',
//   'img' => 'img/portfolio/circus.png'
// ]

$title = "Mi portafolio";

$portafolio = [
  ['link' => 'proyecto.php', 'img' => 'img/portfolio/cabin.png'],
  ['link' => 'proyecto.php', 'img' => 'img/portfolio/cake.png'],
  ['link' => 'proyecto.php', 'img' => 'img/portfolio/circus.png'],
  ['link' => 'proyecto.php', 'img' => 'img/portfolio/game.png'],
  ['link' => 'proyecto.php', 'img' => 'img/portfolio/safe.png'],
  ['link' => 'proyecto.php', 'img' => 'img/portfolio/submarine.png']
];

?>

<section id="portfolio">
  <div class="container">
    <h2 class="text-center"><?= $title ?></h2>
    <hr class="star-primary">
    <div class="row">
      <?php foreach($portafolio as $item): ?>
        <div class="col-sm-4 portfolio-item">
          <a class="portfolio-link" href="<?php echo $item['link'] ?>" >
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
