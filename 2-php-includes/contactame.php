<?php

$pageTitle = "Contactame";

$title = "Contacta me";

?>

<?php include 'includes/header.php' ?>

<!-- Contact Section -->
<section id="contact">
  <div class="container">
    <h2 class="text-center"><?php echo $title ?></h2>
    <hr class="star-primary">
    <div class="row">
      <div class="col-lg-8 mx-auto">
        <form id="contactForm">
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Nombre</label>
              <input class="form-control" name="name" type="text" placeholder="Nombre">
            </div>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Correo</label>
              <input class="form-control" name="email" type="email" placeholder="Correo">
            </div>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Teléfono</label>
              <input class="form-control" name="phone" type="tel" placeholder="Teléfono">
            </div>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Mensaje</label>
              <textarea class="form-control" name="message" rows="5" placeholder="Mensaje"></textarea>
            </div>
          </div>
          <br>
          <div id="success"></div>
          <div class="form-group">
            <button type="submit" class="btn btn-success btn-lg" id="sendMessageButton">Enviar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php' ?>
