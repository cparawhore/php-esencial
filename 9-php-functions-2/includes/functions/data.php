<?php

function getProjects() {

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

  return $portafolio;
}

function getFindProject($id) {
  $portafolio = getProjects();

  foreach($portafolio as $item) {
    $itemId = $item['id'];

    if($itemId == $id) {
      return $item;
    }

  }
}


?>
