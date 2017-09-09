<?php

$addressTitle = "Dirección";
$address = "Av. La Paz 2175<br>San Miguel, Lima";

$socialNetworksTitle = "Redes sociales";
$facebook = "https://www.facebook.com/fullstack.pe/";
$twitter = "https://twitter.com";

$aboutTitle = "Sobre  fullstack";
$about = "FullStack te convierte en un programador Backend o Frontend.<a href=\"http://www.fullstack.pe\">FullStack</a>";

$copyRigth = "Copyright &copy; Marco Milon " . date('Y');

?>

<!-- Footer -->
<footer class="text-center">
  <div class="footer-above">
    <div class="container">
      <div class="row">
        <div class="footer-col col-md-4">
          <h3><?php echo $addressTitle ?></h3>
          <p><?php echo $address ?></p>
          </div>
          <div class="footer-col col-md-4">
            <h3>Redes sociales</h3>
            <ul class="list-inline">
              <li class="list-inline-item">
                <a class="btn-social btn-outline" href="<?php echo $facebook ?>">
                  <i class="fa fa-fw fa-facebook"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn-social btn-outline" href="<?php echo $twitter ?>">
                  <i class="fa fa-fw fa-twitter"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="footer-col col-md-4">
            <h3><?php echo $aboutTitle ?></h3>
            <p><?php echo $about ?></a>.
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-below">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <?php echo $copyRigth ?>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
  <div class="scroll-top d-lg-none">
    <a class="btn btn-primary js-scroll-trigger" href="#page-top">
      <i class="fa fa-chevron-up"></i>
    </a>
  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/popper/popper.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Contact Form JavaScript
  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script>
-->

<!-- Custom scripts for this template -->
<script src="js/freelancer.js"></script>

</body>

</html>
