<?php include 'includes/header.php' ?>

<?php

if(!empty($_POST)) {

  $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);
  $title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING);
  $paragraph = filter_input(INPUT_POST, 'paragraph', FILTER_SANITIZE_STRING);
  $img = filter_input(INPUT_POST, 'img', FILTER_SANITIZE_STRING);
  $client = filter_input(INPUT_POST, 'client', FILTER_SANITIZE_STRING);
  $date = filter_input(INPUT_POST, 'date', FILTER_SANITIZE_STRING);
  $work = filter_input(INPUT_POST, 'work', FILTER_SANITIZE_STRING);

  updateProject($id, $title, $paragraph, $img, $client, $date, $work);

  header("Location: portafolio.php");

} else {

  $id = $_GET['id'];
  $project = getProject($id);

}

?>

<div class="container">
  <section id="main">

    <h1>Actualiza el projecto</h1>

    <form action="portafolio-actualizar.php" method="POST">
      <input type="hidden" name="id" value="<?php echo $id ?>">
      <div class="form-group">
        <label for="title">Título</label>
        <input type="text" name="title" class="form-control" id="title" placeholder="Título" value="<?php echo $project['title'] ?>">
      </div>
      <div class="form-group">
        <label for="paragraph">Parrafo</label>
        <textarea name="paragraph" class="form-control" id="paragraph"><?php echo $project['paragraph'] ?></textarea>
      </div>
      <div class="form-group">
        <label for="img">Imágen</label>
        <input type="text" name="img" class="form-control" id="img" placeholder="Imágen" value="<?php echo $project['img'] ?>">
      </div>
      <div class="form-group">
        <label for="client">Cliente</label>
        <input type="text" name="client" class="form-control" id="client" placeholder="Cliente" value="<?php echo $project['client'] ?>">
      </div>
      <div class="form-group">
        <label for="date">Fecha</label>
        <input type="text" name="date" class="form-control" id="date" placeholder="Fecha" value="<?php echo $project['date'] ?>">
      </div>
      <div class="form-group">
        <label for="work">Trabajo</label>
        <input type="text" name="work" class="form-control" id="work" placeholder="Trabajo" value="<?php echo $project['work'] ?>">
      </div>
      <div class="text-right">
        <button type="submit" class="btn btn-primary">Actualizar</button>
      </div>
    </form>


  </section>
</div>

<?php include 'includes/footer.php' ?>
