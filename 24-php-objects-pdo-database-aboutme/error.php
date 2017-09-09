<?php

$pageTitle = "Error";

$title = "Error";

$paragraph1 = "El formulario no esta completo.";
$paragraph2 = "Los campos nombre y correo son obligatorios.";

?>

<?php include 'includes/header.php' ?>

<section id="thanks">
  <div class="container text-center">
    <h2><?php echo $title ?></h2>
    <hr class="star-primary">
    <p>
      <?php echo $paragraph1 ?>
    </p>
    <p>
      <?php echo $paragraph2 ?>
    </p>
    <p>
      <a href="contactame.php">Volver al formulario</a>
    </p>
  </div>
</section>


<?php include 'includes/footer.php' ?>
