<?php

$pageTitle = "Gracias";

$title = "Gracias";

$paragraph1 = "Hemos recibido tu solicitud de información.";
$paragraph2 = "En breve te contactamos.";

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
      <a href="index.php">Volver al inicio</a>
    </p>
  </div>
</section>


<?php include 'includes/footer.php' ?>
