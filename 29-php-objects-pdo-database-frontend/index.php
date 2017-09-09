<?php

$pageTitle = "Inicio";

?>

<?php include 'includes/header.php' ?>

<?php

$home = getHome();

?>

<header class="masthead">
  <div class="container">
    <img class="img-fluid" src="<?php echo $home['img'] ?>" alt="">
    <div class="intro-text">
      <span class="name"><?php echo $home['title'] ?></span>
      <hr class="star-light">
      <span class="skills"><?php echo $home['skills'] ?></span>
    </div>
  </div>
</header>

<?php include 'includes/portafolio.php' ?>

<?php include 'includes/footer.php' ?>
