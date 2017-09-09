<?php

$pageTitle = "Inicio";

$title = "Bienvenido";
$skills = "Programador Web - Diseñador grafico - Marketing digital";

?>

<?php include 'includes/header.php' ?>

<?php

getHome();

?>

<header class="masthead">
  <div class="container">
    <img class="img-fluid" src="img/profile.png" alt="">
    <div class="intro-text">
      <span class="name"><?php echo $title ?></span>
      <hr class="star-light">
      <span class="skills"><?php echo $skills ?></span>
    </div>
  </div>
</header>

<?php include 'includes/portafolio.php' ?>

<?php include 'includes/footer.php' ?>
