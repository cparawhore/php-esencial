<?php

$pageTitle = "Sobre Mi";

?>

<?php include 'includes/header.php' ?>

<?php

$aboutme = getAboutme();

?>

<!-- About Section -->
<section class="success" id="about">
  <div class="container">
    <h2 class="text-center"><?php echo $aboutme['title'] ?></h2>
    <hr class="star-light">
    <div class="row">
      <div class="col-lg-12 ml-auto text-center">
        <div class="profile-img">
          <img class="img-fluid" src="img/profile.png" alt="">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-4 ml-auto">
        <p>
          <?php echo $aboutme['paragraph1'] ?>
        </p>
      </div>
      <div class="col-lg-4 mr-auto">
        <p>
          <?php echo $aboutme['paragraph2'] ?>
        </p>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php' ?>
