<?php

include "includes/functions.php";

$pageTitle = "Proyecto";

$id = $_GET['id'];

// var_dump($id);
// exit();

?>

<?php include 'includes/header.php' ?>

  <section id="project">

    <div class="container">
      <div class="row">
        <div class="col-lg-12 mx-auto">
          <h2 class="text-center">Título del proyecto</h2>
          <hr class="star-primary">
          <div class="row">
            <div class="col-lg-7">
              <p>
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.
              </p>
              <ul class="list-inline item-details">
                <li>
                  Cliente:
                  <strong>
                    <a href="http://startbootstrap.com">Start Bootstrap</a>
                  </strong>
                </li>
                <li>
                  Fecha:
                  <strong>
                    <a href="http://startbootstrap.com">Abril 2017</a>
                  </strong>
                </li>
                <li>
                  Trabajo:
                  <strong>
                    <a href="http://startbootstrap.com">Desarrollo Web</a>
                  </strong>
                </li>
              </ul>
            </div>
            <div class="col-lg-5 text-center">
              <img class="img-fluid img-centered" src="img/portfolio/cabin.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </section>

<?php include 'includes/footer.php' ?>
