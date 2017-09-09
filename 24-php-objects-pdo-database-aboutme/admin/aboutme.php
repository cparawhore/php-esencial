<?php include 'includes/header.php' ?>

<?php

if(!empty($_POST)) {

  $title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING);
  $paragraph1 = filter_input(INPUT_POST, 'paragraph1', FILTER_SANITIZE_STRING);
  $paragraph2 = filter_input(INPUT_POST, 'paragraph2', FILTER_SANITIZE_STRING);

  $aboutme = updateAboutme($title, $paragraph1, $paragraph2);

} else {

  $aboutme = getAboutme();

}

?>

<div class="container">
  <section id="main">

    <h1>Sobre mi</h1>

    <form action="aboutme.php" method="POST">
      <div class="form-group">
        <label for="title">Título</label>
        <input type="text" name="title" class="form-control" id="title" placeholder="Título" value="<?php echo $aboutme['title'] ?>">
      </div>
      <div class="form-group">
        <label for="paragraph1">Parrafo 1</label>
        <textarea name="paragraph1" class="form-control" id="paragraph1"><?php echo $aboutme['paragraph1'] ?></textarea>
      </div>
      <div class="form-group">
        <label for="paragraph2">Parrafo 2</label>
        <textarea name="paragraph2" class="form-control" id="paragraph2"><?php echo $aboutme['paragraph2'] ?></textarea>
      </div>
      <div class="text-right">
        <button type="submit" class="btn btn-primary">Actualizar</button>
      </div>
    </form>

  </section>
</div>

<?php include 'includes/footer.php' ?>
