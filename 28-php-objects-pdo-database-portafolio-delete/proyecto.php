<?php

$pageTitle = "Proyecto";

$id = $_GET['id'];

?>

<?php include 'includes/header.php' ?>

<?php

$project = getProject($id);

?>

  <section id="project">

    <div class="container">
      <div class="row">
        <div class="col-lg-12 mx-auto">
          <h2 class="text-center"><?php echo $project['title'] ?></h2>
          <hr class="star-primary">
          <div class="row">
            <div class="col-lg-7">
              <p>
                <?php echo $project['paragraph'] ?>
              </p>
              <ul class="list-inline item-details">
                <li>
                  Cliente:
                  <strong>
                    <?php echo $project['client'] ?>
                  </strong>
                </li>
                <li>
                  Fecha:
                  <strong>
                    <?php echo $project['date'] ?>
                  </strong>
                </li>
                <li>
                  Trabajo:
                  <strong>
                    <?php echo $project['work'] ?>
                  </strong>
                </li>
              </ul>
            </div>
            <div class="col-lg-5 text-center">
              <img class="img-fluid img-centered" src="<?php echo $project['img'] ?>" alt="">
            </div>
          </div>
        </div>
      </div>
    </section>

<?php include 'includes/footer.php' ?>
