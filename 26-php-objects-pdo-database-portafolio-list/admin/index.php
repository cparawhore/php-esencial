<?php include 'includes/header.php' ?>

<?php

if(!empty($_POST)) {

  $title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING);
  $img = filter_input(INPUT_POST, 'img', FILTER_SANITIZE_STRING);
  $skills = filter_input(INPUT_POST, 'skills', FILTER_SANITIZE_STRING);

  $home = updateHome($title, $img, $skills);

} else {

  $home = getHome();

}

?>

<div class="container">
  <section id="main">

    <h1>Inicio</h1>

    <form action="index.php" method="POST">
      <div class="form-group">
        <label for="title">Título</label>
        <input type="text" name="title" class="form-control" id="title" placeholder="Título" value="<?php echo $home['title'] ?>">
      </div>
      <div class="form-group">
        <label for="img">Imagen</label>
        <input type="text" name="img" class="form-control" id="img" placeholder="Imagen" value="<?php echo $home['img'] ?>">
      </div>
      <div class="form-group">
        <label for="skills">Habilidades</label>
        <textarea name="skills" class="form-control" id="skills"><?php echo $home['skills'] ?></textarea>
      </div>
      <div class="text-right">
        <button type="submit" class="btn btn-primary">Actualizar</button>
      </div>
    </form>

  </section>
</div>

<?php include 'includes/footer.php' ?>
