<?php include 'includes/header.php' ?>

<?php

if(!empty($_POST)) {

  $title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING);
  $paragraph = filter_input(INPUT_POST, 'paragraph', FILTER_SANITIZE_STRING);
  $img = filter_input(INPUT_POST, 'img', FILTER_SANITIZE_STRING);
  $client = filter_input(INPUT_POST, 'client', FILTER_SANITIZE_STRING);
  $date = filter_input(INPUT_POST, 'date', FILTER_SANITIZE_STRING);
  $work = filter_input(INPUT_POST, 'work', FILTER_SANITIZE_STRING);

  createProject($title, $paragraph, $img, $client, $date, $work);

  header("Location: portafolio.php");

}

?>

<div class="container">
  <section id="main">

    <h1>Agrega un nuevo projecto</h1>

    <form action="portafolio-nuevo.php" method="POST">
      <div class="form-group">
        <label for="title">Título</label>
        <input type="text" name="title" class="form-control" id="title" placeholder="Título">
      </div>
      <div class="form-group">
        <label for="paragraph">Parrafo</label>
        <textarea name="paragraph" class="form-control" id="paragraph"></textarea>
      </div>
      <div class="form-group">
        <label for="img">Imágen</label>
        <input type="text" name="img" class="form-control" id="img" placeholder="Imágen">
      </div>
      <div class="form-group">
        <label for="client">Cliente</label>
        <input type="text" name="client" class="form-control" id="client" placeholder="Cliente">
      </div>
      <div class="form-group">
        <label for="date">Fecha</label>
        <input type="text" name="date" class="form-control" id="date" placeholder="Fecha">
      </div>
      <div class="form-group">
        <label for="work">Trabajo</label>
        <input type="text" name="work" class="form-control" id="work" placeholder="Trabajo">
      </div>
      <div class="text-right">
        <button type="submit" class="btn btn-primary">Grabar</button>
      </div>
    </form>


  </section>
</div>

<?php include 'includes/footer.php' ?>
