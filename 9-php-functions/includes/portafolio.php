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
  [
    'id' => '1',
    'link' => 'proyecto.php',
    'img' => 'img/portfolio/cabin.png',
    'title' => 'Titulo 1',
    'paragraph' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.',
    'client' => 'Client 1',
    'date' => 'Enero 2015',
    'work' => 'Desarrollo web'
  ],
  [
    'id' => '2',
    'link' => 'proyecto.php',
    'img' => 'img/portfolio/cake.png',
    'title' => 'Titulo 2',
    'paragraph' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.',
    'client' => 'Client 2',
    'date' => 'Enero 2015',
    'work' => 'Desarrollo web'
  ],
  [
    'id' => '3',
    'link' => 'proyecto.php',
    'img' => 'img/portfolio/circus.png',
    'title' => 'Titulo 3',
    'paragraph' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.',
    'client' => 'Client 3',
    'date' => 'Enero 2015',
    'work' => 'Desarrollo web'
  ],
  [
    'id' => '4',
    'link' => 'proyecto.php',
    'img' => 'img/portfolio/game.png',
    'title' => 'Titulo 4',
    'paragraph' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.',
    'client' => 'Client 4',
    'date' => 'Enero 2015',
    'work' => 'Desarrollo web'
  ],
  [
    'id' => '5',
    'link' => 'proyecto.php',
    'img' => 'img/portfolio/safe.png',
    'title' => 'Titulo 5',
    'paragraph' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.',
    'client' => 'Client 5',
    'date' => 'Enero 2015',
    'work' => 'Desarrollo web'
  ],
  [
    'id' => '6',
    'link' => 'proyecto.php',
    'img' => 'img/portfolio/submarine.png',
    'title' => 'Titulo 6',
    'paragraph' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.',
    'client' => 'Client 6',
    'date' => 'Enero 2015',
    'work' => 'Desarrollo web'
  ],
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
