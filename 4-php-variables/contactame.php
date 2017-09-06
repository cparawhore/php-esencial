<?php

$pageTitle = "Contactame"

?>

<?php include 'includes/header.php' ?>

<!-- Contact Section -->
<section id="contact">
  <div class="container">
    <h2 class="text-center">Contacta me</h2>
    <hr class="star-primary">
    <div class="row">
      <div class="col-lg-8 mx-auto">
        <form name="sentMessage" id="contactForm" novalidate>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Nombre</label>
              <input class="form-control" id="name" type="text" placeholder="Nombre">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Correo</label>
              <input class="form-control" id="email" type="email" placeholder="Correo">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Teléfono</label>
              <input class="form-control" id="phone" type="tel" placeholder="Teléfono">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Mensaje</label>
              <textarea class="form-control" id="message" rows="5" placeholder="Mensaje"></textarea>
              <p class="help-block text-danger"></p>
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
