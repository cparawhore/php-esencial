<?php

$pageTitle = "Sobre Mi";

$title = "Hola";
$paragraph1 = "Soy fundador de FullStack.pe. Programador apasionado con 10 años de experiencia programando en PHP, entre mis proyectos destactan las startups Fottiva y Considéralo Hecho.";
$paragraph2 = "Tengo experiencia trabajando para empresas Europeas y Norteamericanas. En mi trabajo diario utilizo el sistema operativo Linux, Atom  y el framework Yii 2.";

?>

<?php include 'includes/header.php' ?>

<!-- About Section -->
<section class="success" id="about">
  <div class="container">
    <h2 class="text-center"><?php echo $title ?></h2>
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
          <?php echo $paragraph1 ?>
        </p>
      </div>
      <div class="col-lg-4 mr-auto">
        <p>
          <?php echo $paragraph2 ?>
        </p>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php' ?>
