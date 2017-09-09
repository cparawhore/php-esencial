<?php

include 'includes/access.php';

authorize();

include '../includes/functions.php';

$menu = [
  'index.php' => 'Inicio',
  'aboutme.php' => 'Sobre mi',
  'portafolio.php' => 'Portafolio'
];

$url = basename($_SERVER['PHP_SELF']);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  <link rel="stylesheet" href="css/custom.css">
</head>
<body>


  <div class="container">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="index.php">Panel de control</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <?php foreach($menu as $key => $value): ?>
            <li class="nav-item">
              <?php if($url == "$key"): ?>
                <a class="nav-link active" href="<?php echo $key ?>"><?php echo $value ?></a>
              <?php else: ?>
                <a class="nav-link" href="<?php echo $key ?>"><?php echo $value ?></a>
              <?php endif; ?>
            </li>
          <?php endforeach; ?>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <a href="logout.php" class="btn btn-outline-primary my-2 my-sm-0">Salir</a>
        </form>
      </div>
    </nav>
  </div>
